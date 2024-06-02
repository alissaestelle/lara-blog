import "./bootstrap";
import Alpine from "alpinejs";

import React from "react";
import ReactDOM from "react-dom/client";

import Comment from "./components/Comment";

window.Alpine = Alpine;
Alpine.start();

ReactDOM.createRoot(document.getElementById("react-comments")).render(
    <Comment />,
);
