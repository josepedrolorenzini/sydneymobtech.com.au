// Import Swiper React components
import { Swiper, SwiperSlide } from "swiper/react";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import { Navigation, Pagination , Autoplay} from 'swiper/modules'; 

function HomeBanners({url}) {
  console.log(Swiper)
    return (
        <>
          {/* <div className="px-4 py-1 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <img src={url} alt="Home Banners" />
          </div> */}

          <Swiper
            modules={[Navigation, Pagination]}
            navigation={true}
            Pagination={{ clickable: true }}
            spaceBetween={50}
            Autoplay={{delay: 100}}
            slidesPerView={1}
        >
            <SwiperSlide>
                <img src={url} alt="Slide 1" />
            </SwiperSlide>
            <SwiperSlide>
                <img src="/img/Website-Banner-Photo-scaled.jpg" alt="Slide 2" />
            </SwiperSlide>
        </Swiper>
        </>
    )
}

export default HomeBanners
