import Avatar, { genConfig } from 'react-nice-avatar';
import gradients from '../gradients.js';

const Comment = () => {
    let users = window.users;
    let comments = window.postComments;
    let handles = users.map((user) => {
        user = user.split('.');
        if (user.length > 2) user.pop();

        return user.join('.');
    });

    const newAvatar = () => {
        let config = genConfig();

        let gradient = gradients[Math.floor(Math.random() * gradients.length)];
        let colors = [config.bgColor, gradient];
        let thisColor = colors[Math.floor(Math.random() * colors.length)];

        config.bgColor = thisColor;

        return <Avatar style={{ width: '4rem', height: '4rem' }} {...config} />;
    };

    return (
        <div>
            {comments.map((comment, key) => (
                <div
                    key={comment.id}
                    className="mb-4 p-4 rounded-xl border border-gray-200 bg-gray-50">
                    <div className="flex flex-col xs:pl-2 md:flex-row md:gap-4 lg:px-2">
                        <div className="flex items-center gap-3 md:shrink-0 md:self-start">
                            {newAvatar()}
                            <header className="flex flex-col md:hidden">
                                <p className="text-sm">@{handles[key]}</p>
                                <span className="text-xs">
                                    <time>Posts 8 Months Ago</time>
                                </span>
                            </header>
                        </div>
                        <div>
                            <header className="hidden md:mt-1.5 md:flex md:flex-col">
                                <p className="text-sm">@{handles[key]}</p>
                                <span className="text-xs">
                                    <time>Posts 8 Months Ago</time>
                                </span>
                            </header>
                            <p className="mt-4 pl-2 text-sm leading-5 text-gray-600 2xs:pl-4 md:mb-1.5 md:pl-0">
                                {comment.body}
                            </p>
                        </div>
                    </div>
                </div>
            ))}
        </div>
    );
};

export default Comment;
