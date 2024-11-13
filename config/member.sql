CREATE TABLE members (
    id INT AUTO_INCREMENT PRIMARY KEY,
    uid VARCHAR(100) NOT NULL,
    name VARCHAR(255) NOT NULL,
    father_name VARCHAR(255) NOT NULL,
    mother_name VARCHAR(255) NOT NULL,
    spouse_name VARCHAR(255),
    nid_number VARCHAR(40) NOT NULL,
    address VARCHAR(255) NOT NULL,
    gender ENUM('পুরুষ', 'মহিলা', 'অনন্য') NOT NULL,
    nationality VARCHAR(50) DEFAULT 'বাংলাদেশ',
    profession VARCHAR(100) NOT NULL,
    phone_number VARCHAR(20) NOT NULL,
    birth_date DATE NOT NULL,
    religion ENUM('ইসলাম', 'হিন্দু', 'খ্রিস্টান', 'অনন্য') NOT NULL,
    user_img VARCHAR(255),
    signature_img VARCHAR(255),
    nid_front_img VARCHAR(255),
    nid_back_img VARCHAR(255),
    nominee_id_number VARCHAR(20) NOT NULL,
    nominee_name VARCHAR(255) NOT NULL,
    nominee_father_name VARCHAR(255) NOT NULL,
    nominee_mother_name VARCHAR(255) NOT NULL,
    nominee_phone_number VARCHAR(20) NOT NULL,
    relationship VARCHAR(100) NOT NULL,
    nominee_img VARCHAR(255),
    nominee_signature VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
);
