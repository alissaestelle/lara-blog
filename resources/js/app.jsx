import "./bootstrap";
import Alpine from "alpinejs";

import React from "react";
import ReactDOM from "react-dom/client";

import Comment from "./components/Comment";

import.meta.glob(['../images/**']);

window.Alpine = Alpine;
Alpine.start();

let reactElem = document.getElementById("react-comments");
let email = document.getElementById("email") ?? false;
let alert = document.getElementById("email-alert") ?? false;

if (reactElem) {
    ReactDOM.createRoot(reactElem).render(
        <Comment />,
    );
}

if (email && alert) {
    email.setAttribute("size", email.placeholder.length - 1);
    email.style.flexGrow = "0";

    const resize = () => {
        let input = email.value.length;
        let placeholder = email.placeholder.length - 1;

        alert.style.visibility = 'hidden';
        alert.style.flexGrow = "0";

        email.size = input > placeholder ? input : placeholder;
    };

    email.oninput = resize;
}