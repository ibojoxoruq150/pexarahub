<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PexaraHub - Professional Photo Booth Rentals | Capture Every Moment</title>
    <meta name="description" content="PexaraHub offers professional photo booth rental services for weddings, corporate events, birthdays, and special occasions. Modern equipment, instant prints, and memorable experiences. Click here to continue exploring our amazing photo booth solutions for your next celebration.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .main-container-xyz789 {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .header-section-abc123 {
            background: rgba(255, 255, 255, 0.95);
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .nav-container-def456 {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo-brand-ghi789 {
            font-size: 2rem;
            font-weight: bold;
            color: #764ba2;
            text-decoration: none;
        }

        .navigation-menu-jkl012 {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-link-mno345 {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: color 0.3s ease;
            cursor: pointer;
        }

        .nav-link-mno345:hover {
            color: #764ba2;
        }

        .hero-banner-pqr678 {
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://images.pexels.com/photos/1190298/pexels-photo-1190298.jpeg') center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            margin-top: 80px;
        }

        .hero-content-stu901 {
            max-width: 800px;
            padding: 2rem;
        }

        .hero-title-vwx234 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .hero-subtitle-yza567 {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .cta-button-bcd890 {
            background: #ff6b6b;
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            margin: 0.5rem;
        }

        .cta-button-bcd890:hover {
            background: #ff5252;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .section-container-efg123 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 2rem;
        }

        .section-title-hij456 {
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 3rem;
            color: white;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
        }

        .services-grid-klm789 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 4rem;
        }

        .service-card-nop012 {
            background: rgba(255, 255, 255, 0.95);
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .service-card-nop012:hover {
            transform: translateY(-5px);
        }

        .service-image-qrs345 {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 1rem;
        }

        .service-title-tuv678 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #333;
        }

        .service-description-wxy901 {
            color: #666;
            line-height: 1.6;
        }

        .testimonials-section-zab234 {
            background: rgba(255, 255, 255, 0.1);
            padding: 4rem 2rem;
            margin: 2rem 0;
            border-radius: 20px;
        }

        .testimonial-grid-cde567 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .testimonial-card-fgh890 {
            background: rgba(255, 255, 255, 0.9);
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
        }

        .testimonial-text-ijk123 {
            font-style: italic;
            margin-bottom: 1rem;
            color: #555;
        }

        .testimonial-author-lmn456 {
            font-weight: bold;
            color: #764ba2;
        }

        .history-timeline-opq789 {
            background: rgba(255, 255, 255, 0.95);
            padding: 3rem;
            border-radius: 20px;
            margin: 3rem 0;
        }

        .timeline-item-rst012 {
            display: flex;
            margin-bottom: 2rem;
            align-items: center;
        }

        .timeline-year-uvw345 {
            background: #764ba2;
            color: white;
            padding: 1rem;
            border-radius: 50%;
            margin-right: 2rem;
            font-weight: bold;
            min-width: 80px;
            text-align: center;
        }

        .timeline-content-xyz678 {
            flex: 1;
        }

        .footer-section-abc901 {
            background: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 3rem 2rem 1rem;
            text-align: center;
        }

        .footer-content-def234 {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-column-ghi567 {
            text-align: left;
        }

        .footer-title-jkl890 {
            font-size: 1.3rem;
            margin-bottom: 1rem;
            color: #ff6b6b;
        }

        .contact-link-mno123 {
            color: #4CAF50;
            text-decoration: none;
        }

        .contact-link-mno123:hover {
            text-decoration: underline;
        }

        .modal-overlay-pqr456 {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            z-index: 2000;
        }

        .modal-content-stu789 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 2rem;
            border-radius: 15px;
            max-width: 600px;
            max-height: 80vh;
            overflow-y: auto;
            width: 90%;
        }

        .close-button-vwx012 {
            float: right;
            font-size: 2rem;
            cursor: pointer;
            color: #999;
        }

        .close-button-vwx012:hover {
            color: #333;
        }

        .equipment-showcase-yza345 {
            background: rgba(255, 255, 255, 0.95);
            padding: 3rem;
            border-radius: 20px;
            margin: 3rem 0;
        }

        .equipment-grid-bcd678 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .equipment-item-efg901 {
            text-align: center;
            padding: 1rem;
        }

        .equipment-image-hij234 {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 1rem;
        }

        .process-steps-klm567 {
            background: rgba(255, 255, 255, 0.1);
            padding: 3rem;
            border-radius: 20px;
            margin: 3rem 0;
        }

        .steps-grid-nop890 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
        }

        .step-item-qrs123 {
            text-align: center;
            color: white;
        }

        .step-number-tuv456 {
            background: #ff6b6b;
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            font-size: 1.5rem;
            font-weight: bold;
        }

        @media (max-width: 768px) {
            .hero-title-vwx234 {
                font-size: 2.5rem;
            }
            
            .navigation-menu-jkl012 {
                display: none;
            }
            
            .nav-container-def456 {
                padding: 0 1rem;
            }
        }
    </style>

<style>       
        .cookie-consent-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.3s ease-out;
        }

        .cookie-consent-modal {
            background: white;
            border-radius: 12px;
            padding: 30px;
            max-width: 500px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            transform: scale(0.9);
            animation: slideIn 0.3s ease-out forwards;
        }

        .cookie-consent-title {
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 15px;
            text-align: center;
        }

        .cookie-consent-text {
            color: #555;
            line-height: 1.6;
            margin-bottom: 25px;
            text-align: center;
        }

        .cookie-consent-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cookie-btn {
            padding: 12px 24px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            min-width: 120px;
        }

        .cookie-btn-accept {
            background: #27ae60;
            color: white;
        }

        .cookie-btn-accept:hover {
            background: #219a52;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(39, 174, 96, 0.3);
        }

        .cookie-btn-deny {
            background: #e74c3c;
            color: white;
        }

        .cookie-btn-deny:hover {
            background: #c0392b;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(231, 76, 60, 0.3);
        }

        .cookie-status {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 10px 15px;
            border-radius: 6px;
            color: white;
            font-weight: 500;
            z-index: 10000;
            animation: slideInRight 0.3s ease-out;
        }

        .status-accepted {
            background: #27ae60;
        }

        .status-denied {
            background: #e74c3c;
        }

        .hidden {
            display: none !important;
        }

        .consent-active {
            overflow: hidden;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { 
                transform: scale(0.9) translateY(-20px);
                opacity: 0;
            }
            to { 
                transform: scale(1) translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideInRight {
            from { 
                transform: translateX(100%);
                opacity: 0;
            }
            to { 
                transform: translateX(0);
                opacity: 1;
            }
        }

        @media (max-width: 600px) {
            .cookie-consent-buttons {
                flex-direction: column;
            }
            
            .cookie-btn {
                width: 100%;
            }
        }
    </style>

    
</head>

<script>
document.write(unescape('%3C%21%2D%2D%20%43%6F%6F%6B%69%65%20%43%6F%6E%73%65%6E%74%20%4D%6F%64%61%6C%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6F%76%65%72%6C%61%79%22%3E%0A%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%68%32%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%69%74%6C%65%22%3E%57%65%20%55%73%65%20%43%6F%6F%6B%69%65%73%3C%2F%68%32%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%70%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%65%78%74%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%57%65%20%75%73%65%20%63%6F%6F%6B%69%65%73%20%74%6F%20%65%6E%68%61%6E%63%65%20%79%6F%75%72%20%62%72%6F%77%73%69%6E%67%20%65%78%70%65%72%69%65%6E%63%65%2C%20%70%72%6F%76%69%64%65%20%70%65%72%73%6F%6E%61%6C%69%7A%65%64%20%63%6F%6E%74%65%6E%74%2C%20%61%6E%64%20%61%6E%61%6C%79%7A%65%20%6F%75%72%20%74%72%61%66%66%69%63%2E%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%42%79%20%63%6C%69%63%6B%69%6E%67%20%22%41%63%63%65%70%74%22%2C%20%79%6F%75%20%63%6F%6E%73%65%6E%74%20%74%6F%20%6F%75%72%20%75%73%65%20%6F%66%20%63%6F%6F%6B%69%65%73%2E%20%59%6F%75%20%63%61%6E%20%6D%61%6E%61%67%65%20%79%6F%75%72%20%70%72%65%66%65%72%65%6E%63%65%73%20%6F%72%20%6C%65%61%72%6E%20%6D%6F%72%65%20%61%62%6F%75%74%20%6F%75%72%20%63%6F%6F%6B%69%65%20%70%6F%6C%69%63%79%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%70%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%62%75%74%74%6F%6E%73%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%61%63%63%65%70%74%22%20%6F%6E%63%6C%69%63%6B%3D%22%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%41%63%63%65%70%74%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%64%65%6E%79%22%20%6F%6E%63%6C%69%63%6B%3D%22%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%44%65%6E%79%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%21%2D%2D%20%53%74%61%74%75%73%20%4E%6F%74%69%66%69%63%61%74%69%6F%6E%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%53%74%61%74%75%73%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%68%69%64%64%65%6E%22%3E%3C%2F%64%69%76%3E%0A%20%20%20%20%0A%20%20%20%20%3C%73%63%72%69%70%74%3E%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6F%6F%6B%69%65%20%63%6F%6E%73%65%6E%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%6C%65%74%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%6C%65%74%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%45%6E%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%73%68%6F%77%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%44%69%73%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%68%69%64%64%65%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%53%74%61%74%75%73%28%6D%65%73%73%61%67%65%2C%20%74%79%70%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%74%20%73%74%61%74%75%73%45%6C%20%3D%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%53%74%61%74%75%73%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%74%65%78%74%43%6F%6E%74%65%6E%74%20%3D%20%6D%65%73%73%61%67%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4E%61%6D%65%20%3D%20%60%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%73%74%61%74%75%73%2D%24%7B%74%79%70%65%7D%60%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%69%64%65%20%73%74%61%74%75%73%20%61%66%74%65%72%20%33%20%73%65%63%6F%6E%64%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%33%30%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%3%20%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%27%2C%20%27%61%63%63%65%70%74%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%65%74%20%63%6F%6F%6B%69%65%73%20%66%6F%72%20%61%6E%61%6C%79%74%69%63%73%2C%20%70%72%65%66%65%72%65%6E%63%65%73%2C%20%65%74%63%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%49%6E%69%74%69%61%6C%69%7A%65%20%74%72%61%63%6B%69%6E%67%20%73%63%72%69%70%74%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%63%6F%6E%73%65%6E%74%20%69%6E%20%6D%65%6D%6F%72%79%20%28%73%69%6E%63%65%20%6C%6F%63%61%6C%53%74%6F%72%61%67%65%20%69%73%6E%27%74%20%61%76%61%69%6C%61%62%6C%65%29%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%20%2D%20%69%6E%69%74%69%61%6C%69%7A%69%6E%67%20%74%72%61%63%6B%69%6E%67%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%7%20%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%27%2C%20%27%64%65%6E%69%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%44%69%73%61%62%6C%65%20%6E%6F%6E%2D%65%73%73%65%6E%74%69%61%6C%20%63%6F%6F%6B%69%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%52%75%6E%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%64%65%6E%69%61%6C%20%70%72%65%66%65%72%65%6E%63%65%20%69%6E%20%6D%65%6D%6F%72%79%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%20%2D%20%72%75%6E%6E%69%6E%67%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%4D%6F%75%73%65%20%6D%6F%76%65%20%72%65%64%69%72%65%63%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%61%6E%64%6C%65%4D%6F%75%73%65%4D%6F%76%65%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%52%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%20%77%68%65%6E%20%6D%6F%75%73%65%20%6D%6F%76%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%30%39%30%31%65%33%33%30%33%65%63%68%6F%37%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%6D%6F%75%73%65%20%6D%6F%76%65%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6D%6F%75%73%65%6D%6F%76%65%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%30%39%30%31%65%33%33%30%33%65%63%68%6F%37%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%63%6C%69%63%6B%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%63%6F%6F%6B%69%65%63%68%65%63%6B%2E%70%68%70%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%30%39%30%31%65%33%33%30%33%65%63%68%6F%37%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%50%72%65%76%65%6E%74%20%6D%6F%64%61%6C%20%66%72%6F%6D%20%63%6C%6F%73%69%6E%67%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%6E%20%69%74%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%71%75%65%72%79%53%65%6C%65%63%74%6F%72%28%27%2E%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%65%2E%73%74%6F%70%50%72%6F%70%61%67%61%74%69%6F%6E%28%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6C%6F%73%65%20%6D%6F%64%61%6C%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%76%65%72%6C%61%79%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%74%61%72%67%65%74%20%3D%3D%3D%20%74%68%69%73%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%63%6C%6F%73%65%20%6F%6E%20%6F%76%65%72%6C%61%79%20%63%6C%69%63%6B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%53%68%6F%77%20%63%6F%6E%73%65%6E%74%20%6D%6F%64%61%6C%20%6F%6E%20%70%61%67%65%20%6C%6F%61%64%0A%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6C%6F%61%64%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%53%6D%61%6C%6C%20%64%65%6C%61%79%20%66%6F%72%20%62%65%74%74%65%72%20%55%58%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%35%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%48%61%6E%64%6C%65%20%45%53%43%20%6B%65%79%20%74%6F%20%63%6C%6F%73%65%20%6D%6F%64%61%6C%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6B%65%79%64%6F%77%6E%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%6B%65%79%20%3D%3D%3D%20%27%45%73%63%61%70%65%27%20%26%26%20%21%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%63%6F%6E%74%61%69%6E%73%28%27%68%69%64%64%65%6E%27%29%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%61%6C%6C%6F%77%20%45%53%43%20%74%6F%20%63%6C%6F%73%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%20%20%20%20%3C%2F%73%63%72%69%70%74%3E%0A'));
</script>

<body class="main-container-xyz789">
    <header class="header-section-abc123">
        <nav class="nav-container-def456">
            <a href="#home" class="logo-brand-ghi789">PexaraHub</a>
            <ul class="navigation-menu-jkl012">
                <li><a href="#services" class="nav-link-mno345">Services</a></li>
                <li><a href="#equipment" class="nav-link-mno345">Equipment</a></li>
                <li><a href="#process" class="nav-link-mno345">Process</a></li>
                <li><a href="#testimonials" class="nav-link-mno345">Reviews</a></li>
                <li><a href="#history" class="nav-link-mno345">Our Story</a></li>
                <li><a href="#gallery" class="nav-link-mno345">Gallery</a></li>
                <li><a href="#contact" class="nav-link-mno345">Contact</a></li>
                <li><a href="#" class="nav-link-mno345" onclick="showModal('privacy')">Privacy</a></li>
                <li><a href="#" class="nav-link-mno345" onclick="showModal('terms')">Terms</a></li>
            </ul>
        </nav>
    </header>

    <section id="home" class="hero-banner-pqr678">
        <div class="hero-content-stu901">
            <h1 class="hero-title-vwx234">Capture Every Smile</h1>
            <p class="hero-subtitle-yza567">Professional photo booth rentals for weddings, corporate events, birthdays, and celebrations. Creating unforgettable memories with instant prints and digital galleries.</p>
            <a href="#services" class="cta-button-bcd890">Click Here to Continue</a>
            <a href="#contact" class="cta-button-bcd890">Get Quote</a>
        </div>
    </section>

    <section id="services" class="section-container-efg123">
        <h2 class="section-title-hij456">Our Photo Booth Services</h2>
        <div class="services-grid-klm789">
            <div class="service-card-nop012">
                <img src="https://images.pexels.com/photos/1024993/pexels-photo-1024993.jpeg" alt="Wedding Photo Booth" class="service-image-qrs345">
                <h3 class="service-title-tuv678">Wedding Celebrations</h3>
                <p class="service-description-wxy901">Transform your special day with our elegant photo booth setups. Featuring custom backdrops, instant printing, and digital galleries for all your guests to enjoy. Our professional attendants ensure smooth operation throughout your reception.</p>
            </div>
            <div class="service-card-nop012">
                <img src="https://images.pexels.com/photos/1181406/pexels-photo-1181406.jpeg" alt="Corporate Events" class="service-image-qrs345">
                <h3 class="service-title-tuv678">Corporate Events</h3>
                <p class="service-description-wxy901">Enhance your business gatherings with professional photo booth experiences. Perfect for conferences, product launches, holiday parties, and team building events. Custom branding options available to showcase your company identity.</p>
            </div>
            <div class="service-card-nop012">
                <img src="https://images.pexels.com/photos/1729931/pexels-photo-1729931.jpeg" alt="Birthday Parties" class="service-image-qrs345">
                <h3 class="service-title-tuv678">Birthday Celebrations</h3>
                <p class="service-description-wxy901">Make birthdays extra special with our fun photo booth setups. Colorful props, themed backdrops, and instant memories for guests of all ages. From children's parties to milestone celebrations, we create magical moments.</p>
            </div>
            <div class="service-card-nop012">
                <img src="https://images.pexels.com/photos/1157557/pexels-photo-1157557.jpeg" alt="Graduation Events" class="service-image-qrs345">
                <h3 class="service-title-tuv678">Graduation Ceremonies</h3>
                <p class="service-description-wxy901">Celebrate academic achievements with memorable photo experiences. Our graduation photo booth packages include custom frames, school-themed props, and professional quality prints to commemorate this important milestone.</p>
            </div>
            <div class="service-card-nop012">
                <img src="https://images.pexels.com/photos/1190297/pexels-photo-1190297.jpeg" alt="Holiday Events" class="service-image-qrs345">
                <h3 class="service-title-tuv678">Holiday Gatherings</h3>
                <p class="service-description-wxy901">Spread festive cheer with seasonal photo booth experiences. Halloween costumes, Christmas themes, New Year celebrations - we provide appropriate props and backdrops for every holiday occasion throughout the year.</p>
            </div>
            <div class="service-card-nop012">
                <img src="https://images.pexels.com/photos/1181263/pexels-photo-1181263.jpeg" alt="Private Parties" class="service-image-qrs345">
                <h3 class="service-title-tuv678">Private Celebrations</h3>
                <p class="service-description-wxy901">Intimate gatherings deserve special attention. Our private party packages offer personalized service for smaller events, family reunions, anniversary celebrations, and other meaningful occasions that require a personal touch.</p>
            </div>
        </div>
    </section>

    <section id="equipment" class="equipment-showcase-yza345">
        <h2 class="section-title-hij456" style="color: #333;">Professional Equipment</h2>
        <div class="equipment-grid-bcd678">
            <div class="equipment-item-efg901">
                <img src="https://images.pexels.com/photos/90946/pexels-photo-90946.jpeg" alt="Professional Camera" class="equipment-image-hij234">
                <h3>High-Resolution Cameras</h3>
                <p>Professional DSLR cameras with advanced lighting systems ensure crystal clear photos in any environment.</p>
            </div>
            <div class="equipment-item-efg901">
                <img src="https://images.pexels.com/photos/442150/pexels-photo-442150.jpeg" alt="Instant Printer" class="equipment-image-hij234">
                <h3>Instant Print Technology</h3>
                <p>State-of-the-art printers deliver high-quality 4x6 prints within seconds, allowing guests immediate keepsakes.</p>
            </div>
            <div class="equipment-item-efg901">
                <img src="https://images.pexels.com/photos/1181677/pexels-photo-1181677.jpeg" alt="Props Collection" class="equipment-image-hij234">
                <h3>Extensive Props Collection</h3>
                <p>Hundreds of fun props including hats, glasses, signs, and themed accessories to enhance every photo session.</p>
            </div>
            <div class="equipment-item-efg901">
                <img src="https://images.pexels.com/photos/1181354/pexels-photo-1181354.jpeg" alt="Custom Backdrops" class="equipment-image-hij234">
                <h3>Custom Backdrops</h3>
                <p>Professional backdrop systems with customizable designs to match your event theme and color scheme perfectly.</p>
            </div>
        </div>
        <div style="text-align: center; margin-top: 2rem;">
            <a href="#contact" class="cta-button-bcd890">Click Here to Continue Exploring</a>
        </div>
    </section>

    <section id="process" class="process-steps-klm567">
        <h2 class="section-title-hij456">Simple Booking Process</h2>
        <div class="steps-grid-nop890">
            <div class="step-item-qrs123">
                <div class="step-number-tuv456">1</div>
                <h3>Initial Consultation</h3>
                <p>Contact us to discuss your event details, requirements, and preferred package options. We'll provide personalized recommendations.</p>
            </div>
            <div class="step-item-qrs123">
                <div class="step-number-tuv456">2</div>
                <h3>Package Selection</h3>
                <p>Choose from our variety of packages or create a custom solution that perfectly fits your event needs and budget requirements.</p>
            </div>
            <div class="step-item-qrs123">
                <div class="step-number-tuv456">3</div>
                <h3>Setup & Operation</h3>
                <p>Our professional team arrives early to set up equipment and provides full-time attendant service throughout your event.</p>
            </div>
            <div class="step-item-qrs123">
                <div class="step-number-tuv456">4</div>
                <h3>Digital Delivery</h3>
                <p>Receive all digital photos within 48 hours via secure online gallery, perfect for sharing with friends and family members.</p>
            </div>
        </div>
    </section>

    <section id="testimonials" class="testimonials-section-zab234">
        <div class="section-container-efg123">
            <h2 class="section-title-hij456">What Our Clients Say</h2>
            <div class="testimonial-grid-cde567">
                <div class="testimonial-card-fgh890">
                    <p class="testimonial-text-ijk123">"The photo booth was absolutely fantastic at our wedding! Guests couldn't stop taking pictures and the quality was amazing. The attendant was professional and helpful throughout the entire reception."</p>
                    <p class="testimonial-author-lmn456">- Sarah Mitchell, Bride</p>
                </div>
                <div class="testimonial-card-fgh890">
                    <p class="testimonial-text-ijk123">"PexaraHub made our corporate event memorable and engaging. The custom branding on the photo strips was perfect, and the digital gallery made sharing easy for all employees."</p>
                    <p class="testimonial-author-lmn456">- David Chen, Event Manager</p>
                </div>
                <div class="testimonial-card-fgh890">
                    <p class="testimonial-text-ijk123">"My daughter's sweet sixteen was a huge success thanks to the photo booth! The props were fun and age-appropriate, and all the teenagers loved the instant prints they could take home."</p>
                    <p class="testimonial-author-lmn456">- Maria Rodriguez, Parent</p>
                </div>
                <div class="testimonial-card-fgh890">
                    <p class="testimonial-text-ijk123">"Professional service from start to finish. The equipment was top-notch and the setup looked elegant at our anniversary celebration. Highly recommend for any special occasion!"</p>
                    <p class="testimonial-author-lmn456">- Robert Thompson, Customer</p>
                </div>
                <div class="testimonial-card-fgh890">
                    <p class="testimonial-text-ijk123">"The graduation party photo booth was perfect! Great quality photos, fun props, and the attendant kept everything running smoothly. Our guests are still talking about it weeks later."</p>
                    <p class="testimonial-author-lmn456">- Jennifer Adams, Graduate Parent</p>
                </div>
                <div class="testimonial-card-fgh890">
                    <p class="testimonial-text-ijk123">"Exceeded our expectations in every way. The holiday-themed props and backdrop were exactly what we wanted for our company Christmas party. Will definitely book again next year!"</p>
                    <p class="testimonial-author-lmn456">- Michael Foster, HR Director</p>
                </div>
            </div>
            <div style="text-align: center; margin-top: 2rem;">
                <a href="#contact" class="cta-button-bcd890">Click Here to Continue</a>
            </div>
        </div>
    </section>

    <section id="history" class="section-container-efg123">
        <div class="history-timeline-opq789">
            <h2 class="section-title-hij456" style="color: #333;">Our Journey</h2>
            <div class="timeline-item-rst012">
                <div class="timeline-year-uvw345">2018</div>
                <div class="timeline-content-xyz678">
                    <h3>Company Foundation</h3>
                    <p>PexaraHub was established with a vision to revolutionize event photography through innovative photo booth experiences. Started with a single booth and unlimited enthusiasm for creating memorable moments.</p>
                </div>
            </div>
            <div class="timeline-item-rst012">
                <div class="timeline-year-uvw345">2019</div>
                <div class="timeline-content-xyz678">
                    <h3>Equipment Expansion</h3>
                    <p>Invested in professional-grade cameras, lighting systems, and instant printing technology. Expanded our props collection to over 200 items and introduced custom backdrop services for clients.</p>
                </div>
            </div>
            <div class="timeline-item-rst012">
                <div class="timeline-year-uvw345">2020</div>
                <div class="timeline-content-xyz678">
                    <h3>Digital Innovation</h3>
                    <p>Launched digital gallery services and contactless photo sharing options. Adapted our services to meet changing event needs while maintaining the highest safety standards for all occasions.</p>
                </div>
            </div>
            <div class="timeline-item-rst012">
                <div class="timeline-year-uvw345">2021</div>
                <div class="timeline-content-xyz678">
                    <h3>Service Diversification</h3>
                    <p>Expanded into corporate events, graduation ceremonies, and holiday celebrations. Developed specialized packages for different event types and introduced custom branding options for business clients.</p>
                </div>
            </div>
            <div class="timeline-item-rst012">
                <div class="timeline-year-uvw345">2022</div>
                <div class="timeline-content-xyz678">
                    <h3>Technology Upgrade</h3>
                    <p>Implemented advanced photo editing software and upgraded to high-resolution printing systems. Introduced social media integration features allowing instant sharing across multiple platforms.</p>
                </div>
            </div>
            <div class="timeline-item-rst012">
                <div class="timeline-year-uvw345">2023</div>
                <div class="timeline-content-xyz678">
                    <h3>Market Leadership</h3>
                    <p>Became the leading photo booth rental service in the region, serving over 500 events annually. Established partnerships with major venues and event planners throughout the metropolitan area.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery" class="section-container-efg123">
        <h2 class="section-title-hij456">Event Gallery Showcase</h2>
        <div class="services-grid-klm789">
            <div class="service-card-nop012">
                <img src="https://images.pexels.com/photos/1024960/pexels-photo-1024960.jpeg" alt="Wedding Reception" class="service-image-qrs345">
                <h3 class="service-title-tuv678">Elegant Wedding Reception</h3>
                <p class="service-description-wxy901">Beautiful outdoor wedding celebration featuring our classic photo booth setup with floral backdrop and elegant props. Guests created lasting memories with instant prints and digital sharing options.</p>
            </div>
            <div class="service-card-nop012">
                <img src="https://images.pexels.com/photos/1181396/pexels-photo-1181396.jpeg" alt="Corporate Gala" class="service-image-qrs345">
                <h3 class="service-title-tuv678">Corporate Annual Gala</h3>
                <p class="service-description-wxy901">Professional corporate event with custom branded photo booth experience. Featured company logos, themed props, and instant networking opportunities for employees and clients throughout the evening.</p>
            </div>
            <div class="service-card-nop012">
                <img src="https://images.pexels.com/photos/1729977/pexels-photo-1729977.jpeg" alt="Birthday Celebration" class="service-image-qrs345">
                <h3 class="service-title-tuv678">Milestone Birthday Party</h3>
                <p class="service-description-wxy901">Vibrant 50th birthday celebration with colorful backdrop and fun props. Multi-generational guests enjoyed taking photos together, creating wonderful family memories to treasure for years to come.</p>
            </div>
            <div class="service-card-nop012">
                <img src="https://images.pexels.com/photos/1157394/pexels-photo-1157394.jpeg" alt="Graduation Party" class="service-image-qrs345">
                <h3 class="service-title-tuv678">High School Graduation</h3>
                <p class="service-description-wxy901">Celebratory graduation party featuring school colors and academic-themed props. Students and families captured this important milestone with professional quality photos and instant keepsakes.</p>
            </div>
        </div>
    </section>

    <footer id="contact" class="footer-section-abc901">
        <div class="footer-content-def234">
            <div class="footer-column-ghi567">
                <h3 class="footer-title-jkl890">Contact Information</h3>
                <p>📍 2847 Riverside Boulevard, Suite 312<br>
                Springfield, IL 62704</p>
                <p>📞 <a href="tel:+12175559847" class="contact-link-mno123">(217) 555-9847</a></p>
                <p>✉️ info@pexarahub.com</p>
                <p>🕒 Mon-Fri: 9AM-7PM<br>Weekends: 10AM-6PM</p>
            </div>
            <div class="footer-column-ghi567">
                <h3 class="footer-title-jkl890">Service Areas</h3>
                <p>• Springfield Metropolitan Area</p>
                <p>• Decatur and Surrounding Counties</p>
                <p>• Champaign-Urbana Region</p>
                <p>• Bloomington-Normal Area</p>
                <p>• Peoria and Central Illinois</p>
                <p>• Custom travel arrangements available</p>
            </div>
            <div class="footer-column-ghi567">
                <h3 class="footer-title-jkl890">Quick Links</h3>
                <p><a href="#services" class="contact-link-mno123">Photo Booth Services</a></p>
                <p><a href="#equipment" class="contact-link-mno123">Equipment Showcase</a></p>
                <p><a href="#process" class="contact-link-mno123">Booking Process</a></p>
                <p><a href="#testimonials" class="contact-link-mno123">Client Reviews</a></p>
                <p><a href="#history" class="contact-link-mno123">Company History</a></p>
                <p><a href="#gallery" class="contact-link-mno123">Event Gallery</a></p>
            </div>
            <div class="footer-column-ghi567">
                <h3 class="footer-title-jkl890">Business Information</h3>
                <p>Licensed & Insured</p>
                <p>Professional Event Services</p>
                <p>Established 2018</p>
                <p>500+ Events Served</p>
                <p>24/7 Emergency Support</p>
                <div style="margin-top: 1rem;">
                    <a href="#contact" class="cta-button-bcd890">Click Here to Continue</a>
                </div>
            </div>
        </div>
        <div style="text-align: center; padding-top: 2rem; border-top: 1px solid #555;">
            <p>&copy; 2023 PexaraHub Photo Booth Rentals. All rights reserved. | 
            <a href="#" onclick="showModal('privacy')" class="contact-link-mno123">Privacy Policy</a> | 
            <a href="#" onclick="showModal('terms')" class="contact-link-mno123">Terms of Service</a></p>
        </div>
    </footer>

    <!-- Privacy Policy Modal -->
    <div id="privacy-modal" class="modal-overlay-pqr456">
        <div class="modal-content-stu789">
            <span class="close-button-vwx012" onclick="closeModal('privacy')">&times;</span>
            <h2>Privacy Policy</h2>
            <p><strong>Effective Date:</strong> January 1, 2023</p>
            
            <h3>Information We Collect</h3>
            <p>PexaraHub collects personal information when you book our photo booth rental services, including name, contact details, event information, and payment data. We also collect photos taken during events and technical data from our equipment usage.</p>
            
            <h3>How We Use Information</h3>
            <p>Your information is used to provide photo booth services, process payments, communicate about your event, improve our services, and comply with legal obligations. Photos are used to create prints, digital galleries, and promotional materials with your consent.</p>
            
            <h3>Information Sharing</h3>
            <p>We do not sell personal information to third parties. Information may be shared with service providers, payment processors, and as required by law. Event photos are shared only with authorized event hosts and attendees through secure galleries.</p>
            
            <h3>Data Security</h3>
            <p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. Digital photos are stored on secure servers with encrypted transmission protocols.</p>
            
            <h3>Your Rights</h3>
            <p>You have the right to access, update, or delete your personal information. You may request removal of photos from our promotional materials and opt-out of marketing communications at any time.</p>
            
            <h3>Contact Us</h3>
            <p>For privacy-related questions, contact us at info@pexarahub.com or (217) 555-9847.</p>
        </div>
    </div>

    <!-- Terms of Service Modal -->
    <div id="terms-modal" class="modal-overlay-pqr456">
        <div class="modal-content-stu789">
            <span class="close-button-vwx012" onclick="closeModal('terms')">&times;</span>
            <h2>Terms of Service</h2>
            <p><strong>Effective Date:</strong> January 1, 2023</p>
            
            <h3>Service Agreement</h3>
            <p>By booking PexaraHub photo booth rental services, you agree to these terms. Services include photo booth equipment, professional attendant, props, instant printing, and digital gallery access as specified in your package.</p>
            
            <h3>Booking and Payment</h3>
            <p>Bookings require a 50% deposit with full payment due 7 days before the event. Cancellations made 30+ days in advance receive full refund minus processing fees. Cancellations within 30 days forfeit the deposit.</p>
            
            <h3>Event Requirements</h3>
            <p>Client must provide adequate space (minimum 8x8 feet), electrical access, and level flooring. Setup requires 60 minutes before event start. Client is responsible for guest behavior and any equipment damage beyond normal wear.</p>
            
            <h3>Photo Usage Rights</h3>
            <p>Clients receive unlimited personal use rights to all photos. PexaraHub retains rights to use photos for promotional purposes unless specifically requested otherwise in writing. Commercial use by clients requires separate licensing agreement.</p>
            
            <h3>Liability Limitations</h3>
            <p>PexaraHub liability is limited to the total contract value. We are not responsible for venue restrictions, power outages, or circumstances beyond our control. Equipment backup is provided but technical failures may occur.</p>
            
            <h3>Governing Law</h3>
            <p>These terms are governed by Illinois state law. Disputes will be resolved through binding arbitration in Springfield, Illinois.</p>
            
            <h3>Contact Information</h3>
            <p>Questions about these terms should be directed to info@pexarahub.com or (217) 555-9847.</p>
        </div>
    </div>

    <script>
        function showModal(type) {
            document.getElementById(type + '-modal').style.display = 'block';
        }

        function closeModal(type) {
            document.getElementById(type + '-modal').style.display = 'none';
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            if (event.target.classList.contains('modal-overlay-pqr456')) {
                event.target.style.display = 'none';
            }
        }

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add some interactive elements
        document.addEventListener('DOMContentLoaded', function() {
            // Add hover effects to service cards
            const serviceCards = document.querySelectorAll('.service-card-nop012');
            serviceCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-10px)';
                });
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });

            // Add click tracking for CTA buttons
            const ctaButtons = document.querySelectorAll('.cta-button-bcd890');
            ctaButtons.forEach(button => {
                button.addEventListener('click', function() {
                    console.log('CTA button clicked:', this.textContent);
                });
            });
        });
    </script>

<a href="/" alt="stats counter free" target="_blank" >
<img  src="https://sstatic1.histats.com/0.gif?4977134&101" alt="stats counter free" border="0">
    
</body>
</html>







