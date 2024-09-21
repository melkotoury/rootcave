import Header from '@/app/components/Header';
import About from '@/app/components/About';
import Services from '@/app/components/Services';
import Contact from '@/app/components/Contact';
import Footer from '@/app/components/Footer';

const Home = () => {
  return (
    <div>
      <Header />
      <main>
        <About />
        <Services />
        <Contact />
      </main>
      <Footer />
    </div>
  );
};

export default Home;
