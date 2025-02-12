CREATE TABLE users (
    id SERIAL PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    role VARCHAR(50) CHECK (role IN ('admin', 'voyageur', 'proprietaire')) NOT NULL, --ENUM
    password VARCHAR(255) NOT NULL,
    is_active BOOLEAN NOT NULL DEFAULT TRUE,
    is_connected BOOLEAN NOT NULL DEFAULT FALSE,
    created_at DATE NOT NULL DEFAULT CURRENT_DATE,
    deleted_at DATE
);

INSERT INTO users (name, email, role, password) VALUES
('John Doe', 'john.doe@example.com', 'voyageur', 'password123'),
('Jane Smith', 'jane.smith@example.com', 'proprietaire', 'securepass'),
('Alice Admin', 'alice.admin@example.com', 'admin', 'adminpass'),
('Bob Admin', 'bob.admin@example.com', 'admin', 'anotherpass'),
('Charlie Admin', 'charlie.admin@example.com', 'admin', 'yetanotherpass'),
('Eve Voyager', 'eve.voyager@example.com', 'voyageur', 'evepass');

-- Proprietaire Table
CREATE TABLE proprietaire (
    id SERIAL PRIMARY KEY,
    user_id INT REFERENCES users(id) ON DELETE CASCADE
);

INSERT INTO proprietaire (user_id) VALUES
(2); -- Jane Smith's user ID (assuming she's the second user inserted)
INSERT INTO proprietaire (user_id) VALUES
(3);

-- Voyageur Table
CREATE TABLE voyageur (
    id SERIAL PRIMARY KEY,
    user_id INT REFERENCES users(id) ON DELETE CASCADE
);

INSERT INTO voyageur (user_id) VALUES
(1); -- John Doe's user ID (assuming he's the first user inserted)
INSERT INTO voyageur (user_id) VALUES
(6);

-- Admin Table
CREATE TABLE admin (
    id SERIAL PRIMARY KEY,
    user_id INT REFERENCES users(id) ON DELETE CASCADE,
    validation_compte BOOLEAN NOT NULL DEFAULT FALSE,
    delete_compte BOOLEAN NOT NULL DEFAULT FALSE,
    validation_annonce BOOLEAN NOT NULL DEFAULT FALSE,
    gestion_users BOOLEAN NOT NULL DEFAULT FALSE,
    gestion_litiges BOOLEAN NOT NULL DEFAULT FALSE,
    gestion_reviews BOOLEAN NOT NULL DEFAULT FALSE,
    statistiques BOOLEAN NOT NULL DEFAULT FALSE
);

INSERT INTO admin (user_id, validation_compte, gestion_users) VALUES
(3, TRUE, TRUE);
INSERT INTO admin (user_id, validation_compte) VALUES
(4, FALSE);

-- Annonces Table
CREATE TABLE annonces (
    id SERIAL PRIMARY KEY,
    proprietaire_id INT REFERENCES proprietaire(id) ON DELETE CASCADE,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    price DECIMAL NOT NULL,
    photo VARCHAR(255),
    nombre_chambre INT NOT NULL DEFAULT 1,
    disponible BOOLEAN NOT NULL DEFAULT TRUE,
    localisation VARCHAR(255),
    status VARCHAR(50) CHECK (status IN ('available', 'booked', 'pending')) DEFAULT 'available', --ENUM? Define the possible values
    deleted_at DATE
);

INSERT INTO annonces (proprietaire_id, title, description, price, nombre_chambre, localisation) VALUES
(1, 'Cozy Apartment', 'A beautiful apartment in the city center.', 100.00, 2, 'New York');
INSERT INTO annonces (proprietaire_id, title, description, price, nombre_chambre, disponible, localisation, status) VALUES
(2, 'Beach House', 'A relaxing house near the beach.', 150.00, 3, FALSE, 'Miami', 'booked');

-- Reservation Table
CREATE TABLE reservation (
    id SERIAL PRIMARY KEY,
    voyageur_id INT REFERENCES voyageur(id) ON DELETE CASCADE,
    annonce_id INT REFERENCES annonces(id) ON DELETE CASCADE,
    created_at DATE NOT NULL DEFAULT CURRENT_DATE,
    delai DATE,
    situation_familiale VARCHAR(255),
    nombre_personne INT NOT NULL DEFAULT 1,
    rating INT CHECK (rating >= 1 AND rating <= 5) -- Assuming a 1-5 rating scale
);

INSERT INTO reservation (voyageur_id, annonce_id, delai, nombre_personne, rating) VALUES
(1, 1, '2025-03-15', 2, 4);
INSERT INTO reservation (voyageur_id, annonce_id, created_at, delai, situation_familiale, nombre_personne) VALUES
(2, 2, '2025-02-20', '2025-04-01', 'Couple', 2);

-- Payment Table
CREATE TABLE payment (
    id SERIAL PRIMARY KEY,
    reservation_id INT REFERENCES reservation(id) ON DELETE CASCADE,
    date_payment DATE NOT NULL DEFAULT CURRENT_DATE,
    montant_reservation DECIMAL NOT NULL,
    numero_compte VARCHAR(255)
);

INSERT INTO payment (reservation_id, montant_reservation, numero_compte) VALUES
(1, 100.00, '1234567890');
INSERT INTO payment (reservation_id, date_payment, montant_reservation, numero_compte) VALUES
(2, '2025-02-12', 150.00, '0987654321');

-- Rating Table
CREATE TABLE rating (
    id SERIAL PRIMARY KEY,
    annonce_id INT REFERENCES annonces(id) ON DELETE CASCADE,
    voyageur_id INT REFERENCES voyageur(id) ON DELETE CASCADE,
    rating INT CHECK (rating >= 1 AND rating <= 5)
);

INSERT INTO rating (annonce_id, voyageur_id, rating) VALUES
(1, 1, 5);
INSERT INTO rating (annonce_id, voyageur_id, rating) VALUES
(2, 2, 4);

-- Declaration Table
CREATE TABLE declaration (
    id SERIAL PRIMARY KEY,
    voyageur_id INT REFERENCES voyageur(id) ON DELETE CASCADE,
    object VARCHAR(255) NOT NULL,
    description TEXT
);

INSERT INTO declaration (voyageur_id, object, description) VALUES
(1, 'Complaint', 'The apartment was not clean.');
INSERT INTO declaration (voyageur_id, object, description) VALUES
(2, 'Suggestion', 'Add more amenities.');

-- Commentaire Table
CREATE TABLE commentaire (
    id SERIAL PRIMARY KEY,
    voyageur_id INT REFERENCES voyageur(id) ON DELETE CASCADE,
    annonce_id INT REFERENCES annonces(id) ON DELETE CASCADE,
    description TEXT
);

INSERT INTO commentaire (voyageur_id, annonce_id, description) VALUES
(1, 1, 'Great place to stay!');
INSERT INTO commentaire (voyageur_id, annonce_id, description) VALUES
(2, 2, 'I enjoyed my time there.');

-- Messagerie Table
CREATE TABLE messagerie (
    id SERIAL PRIMARY KEY,
    text TEXT,
    sender_id INT REFERENCES users(id) ON DELETE CASCADE,
    receiver_id INT REFERENCES users(id) ON DELETE CASCADE
);

INSERT INTO messagerie (text, sender_id, receiver_id) VALUES
('Hello, is this apartment available?', 1, 2);
INSERT INTO messagerie (text, sender_id, receiver_id) VALUES
('Yes, it is available from March 1st.', 2, 1);