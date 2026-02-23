import { Bot, MessageCircle, Calendar, BookOpen, AlertTriangle } from "lucide-react";
import { Button } from "./ui/button";

const features = [
  {
    icon: MessageCircle,
    title: "24/7 Health Guidance",
    description: "Ask CHIOMA about symptoms, medications, or general health questions anytime"
  },
  {
    icon: Calendar,
    title: "Booking Assistance",
    description: "Let CHIOMA help you find the right doctor and schedule appointments quickly"
  },
  {
    icon: BookOpen,
    title: "Health Education",
    description: "Learn about conditions, treatments, and preventive care through simple conversations"
  }
];

export function ChiomaSection() {
  return (
    <section className="py-20 px-6 lg:px-32 bg-white" aria-labelledby="chioma-heading">
      <div className="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        {/* Left Column - Chat Demo */}
        <div className="relative">
          <div className="bg-gradient-to-br from-[#7E5BA1] to-[#48C9B0] rounded-2xl p-12 text-white" role="img" aria-label="CHIOMA AI assistant chat demonstration">
            <div className="flex items-center gap-4 mb-8">
              <div className="w-16 h-16 bg-white/10 backdrop-blur rounded-xl flex items-center justify-center">
                <Bot className="w-10 h-10 text-white" aria-hidden="true" />
              </div>
              <div>
                <h3 className="font-['Univa_Nova',sans-serif] font-bold text-3xl">CHIOMA</h3>
                <p className="text-white/80 text-sm">Your Personal Health Assistant</p>
              </div>
            </div>

            {/* Chat Preview */}
            <div className="space-y-4" aria-live="polite">
              <div className="bg-white/10 backdrop-blur rounded-lg p-4">
                <p className="text-xs text-white/60 mb-1">You:</p>
                <p className="text-sm text-white/90">
                  Hi! I've been experiencing headaches for the past two days. What should I do?
                </p>
              </div>
              <div className="bg-white/20 backdrop-blur rounded-lg p-4">
                <p className="text-xs text-white/80 mb-1">CHIOMA:</p>
                <p className="text-sm text-white">
                  I understand you're experiencing headaches. While I can provide guidance, I'd recommend booking a consultation with one of our doctors for a proper assessment. Would you like me to help you schedule an appointment?
                </p>
              </div>
              <div className="flex gap-2">
                <div className="bg-white/20 backdrop-blur rounded-full px-4 py-2">
                  <p className="text-sm text-white">Yes, book appointment</p>
                </div>
                <div className="bg-white/20 backdrop-blur rounded-full px-4 py-2">
                  <p className="text-sm text-white">Tell me more</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        {/* Right Column - Content */}
        <div>
          <h2 id="chioma-heading" className="font-['Univa_Nova',sans-serif] font-bold text-4xl lg:text-5xl text-[#2C3E50] mb-6">
            Meet CHIOMA, Your Personal Health Assistant
          </h2>
          <p className="text-lg text-gray-700 mb-8 leading-relaxed">
            CHIOMA helps you navigate our platform, understand symptoms, and book the right doctor for your needs. Available 24/7 to guide your healthcare journey.
          </p>

          {/* Features Grid */}
          <ul className="space-y-6 mb-8" aria-label="CHIOMA features">
            {features.map((feature, index) => (
              <li key={index} className="flex items-start gap-4">
                <div
                  className={`w-12 h-12 rounded-lg flex items-center justify-center flex-shrink-0 ${
                    index === 0
                      ? "bg-[#14A9CC]/15"
                      : index === 1
                        ? "bg-[#FFC857]/22"
                        : "bg-[#48C9B0]/18"
                  }`}
                  aria-hidden="true"
                >
                  <feature.icon
                    className={`w-6 h-6 ${
                      index === 0
                        ? "text-[#14A9CC]"
                        : index === 1
                          ? "text-[#FFC857]"
                          : "text-[#48C9B0]"
                    }`}
                  />
                </div>
                <div>
                  <h4 className="font-semibold text-[#2C3E50] mb-1">{feature.title}</h4>
                  <p className="text-sm text-gray-600 leading-relaxed">{feature.description}</p>
                </div>
              </li>
            ))}
          </ul>

          {/* Important Disclaimer */}
          <div className="bg-[#ECF0F1] border-l-4 border-[#14A9CC] rounded-lg p-6 mb-6">
            <div className="flex items-start gap-3">
              <AlertTriangle className="w-5 h-5 text-[#14A9CC] flex-shrink-0 mt-0.5" />
              <div>
                <p className="font-semibold text-[#2C3E50] mb-2">Important Notice</p>
                <p className="text-sm text-gray-700 leading-relaxed">
                  CHIOMA provides <strong>guidance and education only</strong> - not medical diagnosis or treatment. Always consult with our licensed doctors for medical advice, prescriptions, and care decisions.
                </p>
              </div>
            </div>
          </div>

          <Button className="bg-[#7E5BA1] hover:bg-[#48C9B0] text-white">
            Chat with CHIOMA
          </Button>
        </div>
      </div>
    </section>
  );
}
