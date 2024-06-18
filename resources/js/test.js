import Avatar, { genConfig } from 'react-nice-avatar';
import gradients from './gradients.js';

let test = "Test";

// let avatars;

// if (typeof users === 'object') {
//     avatars = Object.entries(users).map(([k, v]) => {
//         let config = genConfig();

//         let gradient = gradients[Math.floor(Math.random() * gradients.length)];
//         let colors = [config.bgColor, gradient];
//         let thisColor = colors[Math.floor(Math.random() * colors.length)];

//         config.bgColor = thisColor;

//         let user = [
//             ['name', v],
//             ['config', config],
//         ];

//         user = Object.fromEntries(user);
//         user.id = parseInt(k);

//         return user;
//     });
// }