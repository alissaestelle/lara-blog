import "./bootstrap";
import Alpine from "alpinejs";
import Avatar, { genConfig } from "react-nice-avatar";

window.Alpine = Alpine;
Alpine.start();

const avatar = genConfig();
window.avatar = avatar;
