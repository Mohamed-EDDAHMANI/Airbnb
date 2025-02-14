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
CREATE TABLE proprietaire (
    id SERIAL PRIMARY KEY,
    user_id INT REFERENCES users(id) ON DELETE CASCADE
);
CREATE TABLE voyageur (
    id SERIAL PRIMARY KEY,
    user_id INT REFERENCES users(id) ON DELETE CASCADE
);
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
CREATE TABLE payment (
    id SERIAL PRIMARY KEY,
    reservation_id INT REFERENCES reservation(id) ON DELETE CASCADE,
    date_payment DATE NOT NULL DEFAULT CURRENT_DATE,
    montant_reservation DECIMAL NOT NULL,
    numero_compte VARCHAR(255)
);
CREATE TABLE rating (
    id SERIAL PRIMARY KEY,
    annonce_id INT REFERENCES annonces(id) ON DELETE CASCADE,
    voyageur_id INT REFERENCES voyageur(id) ON DELETE CASCADE,
    rating INT CHECK (rating >= 1 AND rating <= 5)
);

CREATE TABLE declaration (
    id SERIAL PRIMARY KEY,
    voyageur_id INT REFERENCES voyageur(id) ON DELETE CASCADE,
    object VARCHAR(255) NOT NULL,
    description TEXT
);
CREATE TABLE commentaire (
    id SERIAL PRIMARY KEY,
    voyageur_id INT REFERENCES voyageur(id) ON DELETE CASCADE,
    annonce_id INT REFERENCES annonces(id) ON DELETE CASCADE,
    description TEXT
);
CREATE TABLE messagerie (
    id SERIAL PRIMARY KEY,
    text TEXT,
    sender_id INT REFERENCES users(id) ON DELETE CASCADE,
    receiver_id INT REFERENCES users(id) ON DELETE CASCADE
);