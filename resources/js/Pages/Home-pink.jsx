import React from 'react';

const Home = () => {
    return (
        <div className="bg-pink-100 min-h-screen flex flex-col items-center justify-center p-4">
            <header className="text-4xl font-bold text-pink-600 mb-8">
                PINK LION
            </header>

            <nav className="flex space-x-4 mb-8">
                <a href="#home" className="text-pink-600 hover:text-pink-800">HOME</a>
                <a href="#about" className="text-pink-600 hover:text-pink-800">ABOUT</a>
                <a href="#services" className="text-pink-600 hover:text-pink-800">SERVICES</a>
                <a href="#gallery" className="text-pink-600 hover:text-pink-800">GALLERY</a>
                <a href="#contact" className="text-pink-600 hover:text-pink-800">CONTACT</a>
            </nav>

            <main className="text-center">
                <h1 className="text-3xl font-bold text-pink-600 mb-4">
                    #1 Sydney Mobile Mechanics
                </h1>
                <p className="text-pink-700 mb-4">
                    Trusted Experience
                </p>
                <p className="text-pink-700 mb-4">
                    Qualified In All Makes And Models.
                </p>
                <p className="text-pink-700 mb-4">
                    We will travel anywhere in Sydney and our prices won't be beaten
                </p>
                <p className="text-pink-700 mb-4">
                    Give us a call today for Sydney's best mechanic service
                </p>
                <a href="tel:0419263819" className="text-pink-600 hover:text-pink-800 text-xl font-bold">
                    0419 263 819
                </a>
            </main>
        </div>
    );
};

export default Home;
