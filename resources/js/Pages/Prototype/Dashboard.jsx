import Authenticated from "@/Layouts/Authenicated/Index";
import { Link, Head } from "@inertiajs/inertia-react";
import Flickity from "react-flickity-component";
import FeaturedMovie from "@/Components/FeaturedMovie";
import MovieCard from "@/Components/MovieCard";

export default function Dashboard() {
    const flickityOptions = {
        cellAlign: "left",
        contain: true,
        groupCells: 1,
        wrapAround: false,
        pageDots: false,
        prevNextButtons: false,
        draggable: ">1",
    };

    return (
        <>
            <Head title="Dashboard">
                <link
                    rel="stylesheet"
                    href="https://unpkg.com/flickity@2/dist/flickity.min.css"
                />
            </Head>
            <Authenticated>
                <div>
                    <div className="font-semibold text-[22px] text-black mb-4">
                        Featured Movies
                    </div>
                    <Flickity className="gap-[30px]" options={flickityOptions}>
                        {[1, 2, 3, 4].map((i) => (
                            <FeaturedMovie
                                key={i}
                                slug="the-batman-in-love"
                                name={`The Batman In Love ${i}`}
                                category="Action"
                                thumbnail="./../../images/featured-1.png"
                                rating={i + 1}
                            />
                        ))}
                    </Flickity>
                </div>

                <div className="mt-[50px]">
                    <div className="font-semibold text-[22px] text-black mb-4">
                        Browse
                    </div>
                    <Flickity className="gap-[30px]" options={flickityOptions}>
                        {[1, 2, 3, 4, 5, 6].map((i) => (
                            <MovieCard
                                key={i}
                                slug="meow-golden"
                                name={`Golden Pirates ${i}`}
                                category="Comedy"
                                thumbnail="./../../images/browse-2.png"
                            />
                        ))}
                    </Flickity>
                </div>
            </Authenticated>
        </>
    );
}
