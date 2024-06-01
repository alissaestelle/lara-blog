import "./bootstrap";
import Alpine from "alpinejs";
import Avatar, { genConfig } from "react-nice-avatar";
import React from "react";
import ReactDOM from "react-dom/client";

import Test from "./components/Test";

window.Alpine = Alpine;
Alpine.start();

const config = genConfig();
// window.config = config;

const root = ReactDOM.createRoot(document.getElementById("app"));
root.render(<Test features={config} />);
