import Avatar, { genConfig } from "react-nice-avatar";

const Test = () => {
    const config = genConfig();

    return (
        <div>
            <Avatar style={{ width: "4rem", height: "4rem" }} {...config} />
        </div>
    );
};

export default Test;
