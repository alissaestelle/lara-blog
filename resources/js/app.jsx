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
const email = document.getElementById('email');
const alert = document.getElementById('email-alert');

const title = document.getElementById('title') ?? false;
const uploadImg = document.getElementById('image') ?? false;
const tagsList = document.getElementById('tags-list');

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

if (title) {
    title.addEventListener('input', (e) => {
        const url = document.getElementById('url');
        let text = e.target.value;

        text = text.toLowerCase().trim();
        text = text.replace(/[^a-z0-9\s-]/g, ' ').trim();
        text = text.replace(/[\s-]+/g, '-');

        url.setAttribute('value', text);
    });
}

if (uploadImg) {
    uploadImg.addEventListener('change', (e) => {
        const input = document.getElementById('upload-file');
        const span = input.children[0];
        const p = input.children[1];

        uploadImg.setAttribute('value', e.target.value);
        span.innerText = e.target.files[0].name;
        p.style.display = 'none';
    });
}

if (tagsList) {
    tagsList.addEventListener('click', (e) => {
        const tagLabel = document.getElementById('tag-label');

        const listItem = e.target.closest('li');
        const input = listItem.children[0];
        const span = listItem.children[1].innerText;

        input.setAttribute('name', 'tagID');
        tagLabel.innerText = span;

        listItem.style.backgroundColor = '#D8BFD8';
        listItem.style.color = 'white';
    });
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
