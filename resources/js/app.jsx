import "./bootstrap";
import Alpine from "alpinejs";

import React from "react";
import ReactDOM from "react-dom/client";

import Comment from "./components/Comment";

window.Alpine = Alpine;
Alpine.start();

let reactElem = document.getElementById("react-comments");

if (reactElem) {
    ReactDOM.createRoot(reactElem).render(
        <Comment />,
    );
}