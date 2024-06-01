import "./bootstrap";
import Alpine from "alpinejs";
import Avatar, { genConfig } from "react-nice-avatar";

window.Alpine = Alpine;
Alpine.start();

// const { genConfig } = Avatar;

const config = genConfig();
window.config = config;

console.log(config);

// let avatar = window.avatar;
