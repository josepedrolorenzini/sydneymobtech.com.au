import { Link } from '@inertiajs/react';
import React from 'react';

function Footer() {
  return (
    <>
      <footer className="w-full py-6 text-white bg-gray-900">
        <div className="container flex flex-col items-center justify-between px-4 mx-auto md:flex-row">
          <div className="mb-4 md:w-3/4 md:mb-0">
            <nav className="mb-4">
              <ul className="flex flex-wrap space-x-4">
                <li><Link href="/" className="hover:underline">Home</Link></li>
                <li><Link href="/nosotros" className="hover:underline">Nosotros</Link></li>
                <li><Link href="/quehacemos" className="hover:underline">Que hacemos</Link></li>
                <li><Link href="/portfolio" className="hover:underline">Portafolio</Link></li>
                <li><Link href="/contacto" className="hover:underline">Contacto</Link></li>
              </ul>
            </nav>
            <ul className="space-y-1">
              <li className="font-bold">Sydney, Australia</li>
              <li>
                <a href="mailto:sydneymobtech@gmail.com" className="hover:underline">
                sydneymobtech@gmail.com
                </a>
              </li>
            </ul>
          </div>
          <div className="text-center md:w-1/4 md:text-right">
            <span className="font-bold">Encuéntranos</span>
            <ul className="mt-2">
              <li>
                <Link href="https://github.com/josepedrolorenzini" className="hover:underline">
                  Github
                </Link>
              </li>
            </ul>
          </div>
        </div>
      </footer>

      <section className="w-full py-4 text-center text-white bg-gray-800">
        <div className="container px-4 mx-auto">
          <ul className="flex flex-col justify-center space-y-2 md:flex-row md:space-y-0 md:space-x-4">
            <li>Sydney Mobile Technician &copy; 2025</li>
            <li>
              <Link href="/dashboard" className="hover:underline">Dashboard</Link>
            </li>
          </ul>
        </div>
      </section>
    </>
  );
}

export default Footer;
