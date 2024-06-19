import './bootstrap';
import Alpine from 'alpinejs';

import React from 'react';
import ReactDOM from 'react-dom/client';

import Comment from './components/Comment';
import User from './components/User';

import.meta.glob(['../images/**']);

window.Alpine = Alpine;
Alpine.start();

// const users = window.users ?? 0;
const reactComments = document.getElementById('react-comments');
const reactUser = document.getElementById('react-user');
const email = document.getElementById('email') ?? false;
const alert = document.getElementById('email-alert') ?? false;

if (reactUser) {
    ReactDOM.createRoot(reactUser).render(<User />);
}

if (reactComments) {
    ReactDOM.createRoot(reactComments).render(<Comment />);
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

/*
let avatars = [];
let config = genConfig();

if (typeof users === 'object') {
    Object.entries(users).map(([k, v]) => {
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

        avatars.push(user);
    });
}
*/