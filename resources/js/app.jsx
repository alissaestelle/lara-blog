import "./bootstrap";
import Alpine from "alpinejs";

import React from "react";
import ReactDOM from "react-dom/client";

import Comment from "./components/Comment";

window.Alpine = Alpine;
Alpine.start();

let reactElem = document.getElementById("react-comments");
let email = document.getElementById("email");

if (reactElem) {
    ReactDOM.createRoot(reactElem).render(
        <Comment />,
    );
}

if (email) {
    email.setAttribute("size", email.placeholder.length - 1);
}