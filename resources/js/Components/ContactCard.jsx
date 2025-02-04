import React from 'react'

function ContactCard() {
  return (
    <>
    

         <div className="flex items-center justify-center min-h-screen ">
                            <div className="container p-6 mx-auto text-center rounded-lg shadow-lg">
                                <h1 className="mb-4 text-4xl font-bold">Sydney Mobile Technician</h1>
                                <p className="mb-2 text-lg">Your trusted <strong>Sydney Mobile Technicians</strong>.
                                    We provide on-the-spot car repairs and maintenance services across Sydney.</p>
                                <p className="mb-2 text-lg">Our website is currently under construction.</p>
                                <p className="mb-2 text-lg">We’ll be live soon to serve you better!</p>
                                <p className="mb-2 text-lg">For inquiries, please contact us:</p>
        
                                {/*{ Email Section }*/}
                                <div className="flex items-center justify-center mb-2 text-lg">
                                    {/*{{Email Icon}}*/}
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        className="w-6 h-6 mr-2 text-grey-900">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                    </svg>
                                    {/*Email Link*/}
                                    <a href="mailto:sydneymobtech@gmail.com"
                                        className="text-grey-900 hover:underline">sydneymobtech@gmail.com</a>
                                </div>
        
                                {/* Phone Section */}
                                <div className="flex items-center justify-center mb-2 text-lg">
                                    {/*// <!-- Phone Icon -->*/}
                                    <svg xmlns="http://www.w3.org/2000/svg" className="w-6 h-6 mr-2 text-grey-900"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                    {/*Phone Number */}
                                    <a href="tel:0439303829" className="text-grey-900 hover:underline">0439 303
                                        829</a>
                                </div>
                            </div>
        
        
                        </div>
        
    
    
    
    </>
  )
}

export default ContactCard