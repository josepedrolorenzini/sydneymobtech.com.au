import React from 'react';
import HomeLayout from "@/Layouts/HomeLayout.jsx";
import Services from '@/Components/Services';

const Home = ({ bannerImage, allServices }) => {
    console.log(bannerImage);

    console.log(allServices);
    const services = ['Breakdown services', 'Emergency Repairs ', 'Log Book Servicing']
    return (

        <HomeLayout title="Home" bannerImage={bannerImage} >
            <>

                <section classNameName='px-4 py-6'>
                    <div classNameName='px-4 py-6 m-auto container-xl lg:container ' >
                        <h2 classNameName="text-3xl"></h2>
                        {allServices.length === 0 ? (
                            <p>no services found</p>
                        ) : (
                            <div classNameName='grid grid-cols-1 gap-6 md:grid-cols-3'>
                                <div>
                                    {/* <!-- Recent Properties --> */}
                                  <Services services={allServices} />
                                </div>
                            </div>
                        )}
                    </div>

                </section>
            </>
        </HomeLayout>
    );
};

export default Home;
