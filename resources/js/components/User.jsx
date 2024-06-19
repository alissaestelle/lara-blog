import Avatar, { genConfig } from 'react-nice-avatar';
import gradients from '../gradients.js';

const User = () => {
    const newAvatar = () => {
        let config = genConfig();

        let gradient = gradients[Math.floor(Math.random() * gradients.length)];
        let colors = [config.bgColor, gradient];
        let thisColor = colors[Math.floor(Math.random() * colors.length)];

        config.bgColor = thisColor;

        return <Avatar style={{ width: '2.75rem', height: '2.75rem' }} {...config} />;
    };

    return (
        <div>
            <label htmlFor="avatar" className="hidden"></label>
            <div className="pl-0.5 pb-0.5">{newAvatar()}</div>
        </div>
    );
};

export default User;
