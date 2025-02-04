import React, { useState } from 'react'
import HomeLayout from '@/Layouts/HomeLayout'
import { Head, useForm, usePage } from '@inertiajs/react'

function ContactUs({message , allData}) {
  const [open , setOpen] = useState(false);
  console.log(message) ; 
  console.log(allData) ;

  const { data , setData , post , processing ,errors} = useForm({
    name:    '',
    email:   '',
    phone:   '',
    message: '',
  }) ; 


  const handleSubmit = (e) => {
    e.preventDefault() ; ;
    console.log(data);
    post(route('contact.submitted') , {
      forceFormData: true,
    })
  }

  const toggleOpen = () => {
    setOpen((previousState) => !previousState);
  };

  return (
    <>
    
        <HomeLayout title="Home" 
       // bannerImage={bannerImage ? bannerImage : ''}
        >
        <>
        <Head title='Contact Us' />

        <section className="bg-gray-100">

  <div className="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
    <div className="grid grid-cols-1 gap-x-16 gap-y-8 lg:grid-cols-5">
      <div className="lg:col-span-2 lg:py-12">
    
        <p className="max-w-xl text-lg">
         Contact Us
        </p>

        <div className="mt-8">
          <a href="#" className="text-2xl font-bold text-pink-600"> 0426239808 </a>

          <address className="mt-2 not-italic">Sydney | NSW  | Australia</address>
        </div>
      </div>
      
     {!message ?
      (<div className="p-8 bg-white rounded-lg shadow-lg lg:col-span-3 lg:p-12">
       
      <form action="#" className="space-y-4" onSubmit={handleSubmit}>
        <div>
          <label className="sr-only" htmlFor="name">Name</label>
          <input
            className="w-full p-3 text-sm border-gray-200 rounded-lg"
            placeholder="Name"
            value={data.name}
            onChange={e => setData('name' , e.target.value)}
            type="text"
            id="name"
            required
          />
        </div>

        <div className="grid grid-cols-1 gap-4 sm:grid-cols-2">
          <div>
            <label className="sr-only" htmlFor="email">Email</label>
            <input
              className="w-full p-3 text-sm border-gray-200 rounded-lg"
              placeholder="Email address"
              value={data.email}
              onChange={ e => setData('email' , e.target.value)}
              type="email"
              id="email"
              required
            />
          </div>

          <div>
            <label className="sr-only" htmlFor="phone">Phone</label>
            <input
              className="w-full p-3 text-sm border-gray-200 rounded-lg"
              placeholder="Phone Number"
              value={data.phone}
              onChange={e => setData('phone' , e.target.value)}
              type="tel"
              id="phone"
              required
            />
          </div>
        </div>

        <div className="grid grid-cols-1 gap-4 text-center sm:grid-cols-3">
        
        </div>

        <div>
          <label className="sr-only" htmlFor="message">Message</label>

          <textarea
            className="w-full p-3 text-sm border-gray-200 rounded-lg"
            placeholder="Message"
            rows="8"
            value={data.message}
            onChange={e => setData('message' , e.target.value)}
            id="message"
            required></textarea>
        </div>

        <div className="mt-4">
          <button
            type="submit"
            disabled={processing}
            className="inline-block w-full px-5 py-3 font-medium text-white bg-purple-800 rounded-lg sm:w-auto"
          >
            Send Enquiry
          </button>
        </div>
      </form>
    </div>) : 
    <h1 className='p-8 text-xl font-bold bg-white rounded-lg shadow-lg lg:col-span-3 lg:p-12'>Thanks {allData.name} your {message}</h1>}
    </div>
  </div>
</section>

        </>
         </HomeLayout>
    
    </>
  )
}

export default ContactUs