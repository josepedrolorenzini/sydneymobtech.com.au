import React from "react";

const TopHeader = () => {
    return (
        <div className="relative top-0 left-0 z-50 flex flex-wrap w-full text-sm text-white bg-gray-900">
            <div className="container flex justify-between mx-auto px-36 ">
                <div className="flex space-x-4">
                    <a href="tel:0419263819" className="flex space-x-2 hover:underline">
                        <i className="fa fa-phone" aria-hidden="true"></i>
                        <span>04xxx xxx</span>
                    </a>
                    <a href="mailto:sydneymobtech@gmail.com" className="flex space-x-2 hover:underline">
                        <i className="fa fa-envelope" aria-hidden="true"></i>
                        <span>sydneymobtech@gmail.com</span>
                    </a>
                </div>
                <div>
                    <p className="flex space-x-2">
                        <i className="fa fa-clock-o" aria-hidden="true"></i>
                        <span>Monday to Saturday: 8am - 5pm -  Sunday: 8am - 2pm</span>
                    </p>
                </div>
            </div>
        </div>
    );
};

export default TopHeader;
