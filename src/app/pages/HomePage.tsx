import { useEffect, useState } from "react";
import { Hero } from "../components/Hero";
import { About } from "../components/About";
import { TrustSection } from "../components/TrustSection";
import { HowItWorks } from "../components/HowItWorks";
import { Services } from "../components/Services";
import { CredentialVerification } from "../components/CredentialVerification";
import { ChiomaSection } from "../components/ChiomaSection";
import { Pricing } from "../components/Pricing";
import { Team } from "../components/Team";
import { BlogPreview } from "../components/BlogPreview";
import { Contact } from "../components/Contact";
import { Footer } from "../components/Footer";
import { ArrowUp } from "lucide-react";

export default function HomePage() {
  const [showScrollTop, setShowScrollTop] = useState(false);

  useEffect(() => {
    const handleScroll = () => {
      setShowScrollTop(window.scrollY > 300);
    };

    handleScroll();
    window.addEventListener("scroll", handleScroll, { passive: true });
    return () => window.removeEventListener("scroll", handleScroll);
  }, []);

  const scrollToTop = () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
  };

  return (
    <div className="min-h-screen bg-white font-['Karla']" lang="en">
      <Hero />
      <main>
        <About />
        <TrustSection />
        <HowItWorks />
        <Services />
        <CredentialVerification />
        <ChiomaSection />
        <Pricing />
        <Team />
        <BlogPreview />
        <Contact />
      </main>
      <Footer />

      {showScrollTop && (
        <button
          type="button"
          onClick={scrollToTop}
          className="fixed bottom-24 sm:bottom-8 right-4 sm:right-6 z-50 inline-flex items-center gap-2 rounded-full bg-[#14A9CC] px-4 py-3 text-sm font-semibold text-white shadow-lg hover:bg-[#FFC857] transition-colors"
          aria-label="Scroll to top"
        >
          <ArrowUp className="w-4 h-4" aria-hidden="true" />
          Scroll to top
        </button>
      )}
    </div>
  );
}
