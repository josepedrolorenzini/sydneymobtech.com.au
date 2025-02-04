import React from 'react'

function Services(props) {
  return (
    <>
      <section className="px-4 py-6">

<div className="m-auto container-xl lg:container">
    <h2 className="mb-6 text-3xl font-bold text-center text-grey-900">
        Sydney Mobile Technician
    </h2>
    <div className="grid grid-cols-1 gap-6 md:grid-cols-3">
        {props.services.map((service) => (

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
                            <h3 className="text-xl font-bold">{service.name}</h3>
                            <div className="text-gray-600">{service.description}</div>
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
    </>
  )
}

export default Services