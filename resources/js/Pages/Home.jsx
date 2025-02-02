import React from 'react';
import HomeLayout from "@/Layouts/HomeLayout.jsx";

const Home = ({bannerImage , allServices}) => {
    console.log(bannerImage);
    
    console.log(allServices);
    const services = ['Breakdown services' , 'Emergency Repairs ' , 'Log Book Servicing']
    return (

        <HomeLayout title="Home" bannerImage={bannerImage} >
            <>

            <section  classNameName='px-4 py-6'>
      <div classNameName='px-4 py-6 m-auto container-xl lg:container ' >
        <h2 classNameName="text-3xl">Recent properties</h2>
      {services.length === 0 ? (
        <p>no properties found</p>
      ) : (
        <div  classNameName='grid grid-cols-1 gap-6 md:grid-cols-3'>
            <div>
               {/* <!-- Recent Properties --> */}
    <section className="px-4 py-6">
        
      <div className="m-auto container-xl lg:container">
        <h2 className="mb-6 text-3xl font-bold text-center text-grey-900">
        Sydney Mobile Technician
        </h2>
        <div className="grid grid-cols-1 gap-6 md:grid-cols-3">
          {services.map((service) => (
        
            <>
              {/* <!-- Listing 1 --> */}
          <div className="relative bg-white shadow-md rounded-xl">
            <img
              src="img/a1.jpg"
              alt=""
              className="w-full h-auto rounded-t-xl"
            />
            <div className="p-4">
              <div className="mb-6 text-left md:text-center lg:text-left">
                <div className="text-gray-600">Services</div>
                <h3 className="text-xl font-bold">{service}</h3>
              </div>
              <h3
                className="absolute top-[10px] right-[10px] bg-white px-4 py-2 rounded-lg text-grey-500 font-bold text-right md:text-center lg:text-right"
              >
               contact information
              </h3>

              {/* <div className="flex justify-center gap-4 mb-4 text-gray-500">
                <p>
                  <i className="fa-solid fa-bed"></i> 3
                  <span className="md:hidden lg:inline">Beds</span>
                </p>
                <p>
                  <i className="fa-solid fa-bath"></i> 2
                  <span className="md:hidden lg:inline">Baths</span>
                </p>
                <p>
                  <i className="fa-solid fa-ruler-combined"></i>
                  1,500 <span className="md:hidden lg:inline">sqft</span>
                </p>
              </div>

              <div
                className="flex justify-center gap-4 mb-4 text-sm text-green-900"
              >
                <p><i className="fa-solid fa-money-bill"></i> Weekly</p>
                <p><i className="fa-solid fa-money-bill"></i> Monthly</p>
              </div>
               */}

              <div className="mb-5 border border-gray-100"></div>

              <div className="flex flex-col justify-between mb-4 lg:flex-row">
                {/* <div className="flex gap-2 mb-4 align-middle lg:mb-0">
                  <i
                    className="text-lg text-orange-700 fa-solid fa-location-dot"
                  ></i>
                  <span className="text-orange-700"> Boston MA </span>
                </div> */}
                <a
                  href="property.html"
                  className="h-[36px] bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg text-center text-sm"
                >
                  Details
                </a>
              </div>
            </div>
          </div>
            </>
       
    
    ))}
        </div>
      </div>
          </section>
                  </div>
        </div>
      )}

    
      </div>

    </section>
             
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
                                          d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"/>
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
                                          d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                                {/*Phone Number */}
                                <a href="tel:0439303829" className="text-grey-900 hover:underline">0439 303
                                    829</a>
                            </div>
                        </div>


                    </div>
               

            </>
        </HomeLayout>
    );
};

export default Home;
