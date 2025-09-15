const translations = {
    fr: {
        login: {
            title: "Bienvenue !",
            email: "E-mail :",
            password: "Mot de Passe :",
            forgot_password: "Vous avez oublié votre mot de passe ?",
            suivant: "Continuer",
            nocompte: "Vous n'avez pas de compte ?",
            inscrire: "Inscrivez-vous",
            aide: "Aide",
            contact: "Nous contacter"
        },
        register: {
            title: "Inscription",
            nom: "Nom :",          
            prenom: "Prénom :",       
            email: "E-mail :",
            password: "Mot de Passe :",
            confirm_password: "Confirmez votre mot de passe :",
            register_btn: "S'inscrire",
            already_account: "Vous avez déjà un compte ?",
            login_link: "Connectez-vous",
            aide: "Aide",
            contact: "Nous contacter",
            password_error: "Les mots de passe ne correspondent pas !"
        },
        
        settings: {
            title: "Paramètres utilisateur",
            firstname: "Prénom :",
            lastname: "Nom :",
            email: "E-mail :",
            language: "Langue par défaut :",
            save: "Enregistrer les modifications"
        },
        profil: {
            title: "Page profil",
            nom: "Nom :",
            prenom: "Prénom :",
            email: "Email :",
            date: "Date d'inscription :",
            save: "Enregistrer les modifications",
            user: "Utilisateur non trouvé.",
            aide: "Aide",
            logout: "Se déconnecter",
            language_fr: "FR",
            language_en: "EN"
        }
    },
    en: {
        login: {
            title: "Welcome!",
            email: "Email:",
            password: "Password:",
            forgot_password: "Forgot your password?",
            suivant: "Continue",
            nocompte: "Don't have an account?",
            inscrire: "Sign up",
            aide: "Help",
            contact: "Contact us"
        },
        register: {
            title: "Register",
            nom: "Last Name:",          
            prenom: "First Name:",      
            email: "Email:",
            password: "Password:",
            confirm_password: "Confirm your password:",
            register_btn: "Sign up",
            already_account: "Already have an account?",
            login_link: "Log in",
            aide: "Help",
            contact: "Contact us",
            password_error: "Passwords do not match!"
        },
        settings: {
            title: "User Settings",
            firstname: "First Name:",
            lastname: "Last Name:",
            email: "Email:",
            language: "Default Language:",
            save: "Save Changes"
        },
        profil: {
            title: "Profile Page",
            nom: "Last Name:",
            prenom: "First Name:",
            email: "Email:",
            date: "Registration Date:",
            save: "Save changes",
            user: "User not found.",
            aide: "Help",
            logout: "Log out",
            language_fr: "FR",
            language_en: "EN"
        }
    }
};

function switchLanguage(lang, page) {
    const content = translations[lang][page];
    Object.keys(content).forEach(key => {
        const element = document.getElementById(`${key}-label`);
        if (element) {
            element.textContent = content[key];
        }
    });

    const langButtons = document.querySelectorAll('.lang-btn');
    langButtons.forEach(btn => btn.classList.remove('active'));
    document.getElementById(`${lang}-btn`).classList.add('active');
}
