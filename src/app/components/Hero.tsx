import { ImageWithFallback } from "./figma/ImageWithFallback";
import { Button } from "./ui/button";
import { Shield, Clock, Stethoscope, X, Menu } from "lucide-react";
import { useState, useEffect } from "react";
import { ConsultationNotice } from "./ConsultationNotice";
import logoImage from "../../assets/c8397ab71eb936effba7144da57bfed566604694.png";
import imgHero from "../../assets/618cefd477229e137057ef5ef785eb848fb5df12.png";

export function Hero() {
  const [mobileMenuOpen, setMobileMenuOpen] = useState(false);
  const [showConsultationNotice, setShowConsultationNotice] = useState(false);

  const handleBookConsultation = () => {
    setShowConsultationNotice(true);
  };

  const handleProceedToBooking = () => {
    setShowConsultationNotice(false);
    // In a real app, this would navigate to the booking page
    alert("Proceeding to booking page...");
  };

  // Close mobile menu with Escape key
  useEffect(() => {
    const handleEscape = (e: KeyboardEvent) => {
      if (e.key === "Escape" && mobileMenuOpen) {
        setMobileMenuOpen(false);
      }
    };
    document.addEventListener("keydown", handleEscape);
    return () => document.removeEventListener("keydown", handleEscape);
  }, [mobileMenuOpen]);

  return (
    <div id="home" className="relative bg-white">
      {/* Skip to main content link for keyboard users */}
      <a href="#main-content" className="skip-link">
        Skip to main content
      </a>

      {/* Sticky Header/Navbar */}
      <header className="sticky top-0 z-50 bg-white/95 backdrop-blur-sm border-b border-[#ECF0F1] px-6 lg:px-32 py-4" role="banner">
        <nav className="flex items-center justify-between" aria-label="Main navigation">
          {/* Logo */}
          <a href="/" className="flex items-center gap-3">
            <img 
              src={logoImage} 
              alt="MyCyber Clinics - Healthcare meets Technology" 
              className="h-16 lg:h-20 w-auto"
            />
          </a>

          {/* Desktop Navigation */}
          <nav className="hidden lg:flex items-center gap-6">
            <a
              href="#about"
              className="text-[#2C3E50] hover:text-[#FFC857] transition-colors text-sm font-medium"
            >
              About
            </a>
            <a
              href="#services"
              className="text-[#2C3E50] hover:text-[#FFC857] transition-colors text-sm font-medium"
            >
              Services
            </a>
            <a
              href="#plans"
              className="text-[#2C3E50] hover:text-[#FFC857] transition-colors text-sm font-medium"
            >
              Pricing
            </a>
            <a
              href="#team"
              className="text-[#2C3E50] hover:text-[#FFC857] transition-colors text-sm font-medium"
            >
              Doctors
            </a>
            <a
              href="#blog"
              className="text-[#2C3E50] hover:text-[#FFC857] transition-colors text-sm font-medium"
            >
              Blog
            </a>
            <a
              href="#contact"
              className="text-[#2C3E50] hover:text-[#FFC857] transition-colors text-sm font-medium"
            >
              Contact
            </a>
            <Button
              variant="outline"
              className="border-[#FFC857] text-[#FFC857] hover:bg-[#FFC857] hover:text-white"
            >
              Log In
            </Button>
            <Button className="bg-[#48C9B0] hover:bg-[#FFC857] text-white" onClick={handleBookConsultation}>
              Book Consultation
            </Button>
          </nav>

          {/* Mobile Menu Button */}
          <button
            className="lg:hidden p-2"
            onClick={() => setMobileMenuOpen(!mobileMenuOpen)}
          >
            <Menu className="w-6 h-6 text-[#2C3E50]" />
          </button>
        </nav>
      </header>

      {/* Hero Section */}
      <section className="relative px-6 lg:px-32 py-24 lg:py-32 overflow-hidden" id="main-content">
        {/* Background Image */}
        <div className="absolute inset-0 z-0">
          <img 
            src={imgHero} 
            alt="" 
            className="w-full h-full object-cover"
            aria-hidden="true"
          />
          {/* Overlay for better text readability */}
          <div className="absolute inset-0 bg-gradient-to-r from-[#48C9B0]/88 via-[#7E5BA1]/78 to-[#2C3E50]/62"></div>
        </div>

        {/* Content */}
        <div className="relative z-10 max-w-3xl">
          <h1 className="font-['Univa_Nova',sans-serif] font-bold text-4xl md:text-5xl lg:text-6xl text-white mb-6 leading-tight">
            Skip the Queue. See a Doctor anytime, anywhere.
          </h1>
          <p className="text-lg lg:text-xl text-white/90 mb-8 leading-relaxed">
            Get 24/7 access to verified Nigerian doctors, instant prescriptions, and transparent pricing. Start with just ₦2,000.
          </p>

          {/* CTAs */}
          <div className="flex flex-col sm:flex-row gap-4 mb-12">
            <Button
              size="lg"
              className="bg-[#7E5BA1] hover:bg-[#FFC857] text-white text-lg px-8 py-6"
              onClick={handleBookConsultation}
            >
              Book a Consultation
            </Button>
            <Button
              size="lg"
              variant="outline"
              className="border-2 border-white text-white bg-transparent hover:bg-white hover:text-[#2C3E50] text-lg px-8 py-6"
            >
              See Pricing
            </Button>
          </div>

          {/* Trust Indicators */}
          <div className="grid grid-cols-1 sm:grid-cols-3 gap-6">
            <div className="flex items-start gap-3">
              <div className="w-10 h-10 bg-white/20 backdrop-blur rounded-lg flex items-center justify-center flex-shrink-0">
                <Shield className="w-5 h-5 text-[#FFC857]" />
              </div>
              <div>
                <p className="font-semibold text-white text-sm">Verified Doctors</p>
                <p className="text-xs text-white/80">MDCN Licensed</p>
              </div>
            </div>

            <div className="flex items-start gap-3">
              <div className="w-10 h-10 bg-white/20 backdrop-blur rounded-lg flex items-center justify-center flex-shrink-0">
                <Clock className="w-5 h-5 text-[#FFC857]" />
              </div>
              <div>
                <p className="font-semibold text-white text-sm">24/7 Availability</p>
                <p className="text-xs text-white/80">Always online</p>
              </div>
            </div>

            <div className="flex items-start gap-3">
              <div className="w-10 h-10 bg-white/20 backdrop-blur rounded-lg flex items-center justify-center flex-shrink-0">
                <Stethoscope className="w-5 h-5 text-[#FFC857]" />
              </div>
              <div>
                <p className="font-semibold text-white text-sm">Transparent Pricing</p>
                <p className="text-xs text-white/80">No hidden fees</p>
              </div>
            </div>
          </div>

          {/* Privacy Notice */}
          <div className="mt-8 p-4 bg-white/10 backdrop-blur rounded-lg border-l-4 border-[#FFC857]">
            <p className="text-xs text-white leading-relaxed">
              <span className="font-semibold">🔒 Your Privacy Protected:</span> We follow
              international healthcare privacy standards. Your health data is encrypted and
              secure. This platform is for consultations and health guidance - not for collecting
              sensitive personal information.
            </p>
          </div>
        </div>
      </section>

      {/* Mobile Menu */}
      {mobileMenuOpen && (
        <div className="absolute top-16 left-0 right-0 bg-white shadow-lg z-50">
          <div className="px-6 py-4">
            <button
              className="absolute top-4 right-4 p-2"
              onClick={() => setMobileMenuOpen(false)}
            >
              <X className="w-6 h-6 text-[#2C3E50]" />
            </button>
            <nav className="flex flex-col gap-4">
              <a
                href="#about"
                className="text-[#2C3E50] hover:text-[#FFC857] transition-colors text-sm font-medium"
                onClick={() => setMobileMenuOpen(false)}
              >
                About
              </a>
              <a
                href="#services"
                className="text-[#2C3E50] hover:text-[#FFC857] transition-colors text-sm font-medium"
                onClick={() => setMobileMenuOpen(false)}
              >
                Services
              </a>
              <a
                href="#plans"
                className="text-[#2C3E50] hover:text-[#FFC857] transition-colors text-sm font-medium"
                onClick={() => setMobileMenuOpen(false)}
              >
                Pricing
              </a>
              <a
                href="#team"
                className="text-[#2C3E50] hover:text-[#FFC857] transition-colors text-sm font-medium"
                onClick={() => setMobileMenuOpen(false)}
              >
                Doctors
              </a>
              <a
                href="#blog"
                className="text-[#2C3E50] hover:text-[#FFC857] transition-colors text-sm font-medium"
                onClick={() => setMobileMenuOpen(false)}
              >
                Blog
              </a>
              <a
                href="#contact"
                className="text-[#2C3E50] hover:text-[#FFC857] transition-colors text-sm font-medium"
                onClick={() => setMobileMenuOpen(false)}
              >
                Contact
              </a>
              <Button
                variant="outline"
                className="border-[#2C3E50] text-[#2C3E50] hover:bg-[#48C9B0] hover:text-white"
              >
                Log In
              </Button>
              <Button className="bg-[#7E5BA1] hover:bg-[#FFC857] text-white" onClick={handleBookConsultation}>
                Book Consultation
              </Button>
            </nav>
          </div>
        </div>
      )}

      {/* Sticky Mobile CTA */}
      <div className="lg:hidden fixed bottom-0 left-0 right-0 p-4 bg-white border-t border-[#ECF0F1] shadow-lg z-40">
        <Button className="w-full bg-[#7E5BA1] hover:bg-[#FFC857] text-white py-4" onClick={handleBookConsultation}>
          Book Consultation
        </Button>
      </div>

      {/* Consultation Notice */}
      <ConsultationNotice
        isOpen={showConsultationNotice}
        onClose={() => setShowConsultationNotice(false)}
        onProceed={handleProceedToBooking}
      />
    </div>
  );
}
