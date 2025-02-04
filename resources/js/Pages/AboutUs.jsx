import Services from '@/Components/Services'
import HomeLayout from '@/Layouts/HomeLayout'
import React from 'react'

function AboutUs({bannerImage , allServices}) {
  return (
     <HomeLayout title="Home" bannerImage={bannerImage} >
    <>
    <Services services={allServices} />
    </>
     </HomeLayout>
  )
}

export default AboutUs