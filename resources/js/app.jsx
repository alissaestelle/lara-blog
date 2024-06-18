import './bootstrap';
import Alpine from 'alpinejs';
import Avatar, { genConfig } from 'react-nice-avatar';

import React from 'react';
import ReactDOM from 'react-dom/client';

import Comment from './components/Comment';
import gradients from './gradients.js';

import.meta.glob(['../images/**']);

window.Alpine = Alpine;
Alpine.start();

// const users = window.users ?? 0;
const reactElem = document.getElementById('react-comments');
const email = document.getElementById('email') ?? false;
const alert = document.getElementById('email-alert') ?? false;

// let config = genConfig();
// const test = document.getElementById('test');

// let avatars;

/*
if (typeof users === 'object') {
    avatars = Object.entries(users).map(([k, v]) => {
        let config = genConfig();

        let gradient = gradients[Math.floor(Math.random() * gradients.length)];
        let colors = [config.bgColor, gradient];
        let thisColor = colors[Math.floor(Math.random() * colors.length)];

        config.bgColor = thisColor;

        let user = [
            ['name', v],
            ['config', config],
        ];

        user = Object.fromEntries(user);
        user.id = parseInt(k);

        return user;
    });
}
*/

if (reactElem) {
    ReactDOM.createRoot(reactElem).render(<Comment />);
}

if (email && alert) {
    email.setAttribute('size', email.placeholder.length - 1);
    email.style.flexGrow = '0';

    const resize = () => {
        let input = email.value.length;
        let placeholder = email.placeholder.length - 1;

        alert.style.visibility = 'hidden';
        alert.style.flexGrow = '0';

        email.size = input > placeholder ? input : placeholder;
    };

    email.oninput = resize;
}
