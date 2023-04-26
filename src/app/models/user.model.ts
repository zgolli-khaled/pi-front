import { Role } from "./role.model";

export class User {
    idUser ! : number;
    nom ! : string;
    prenom ! : string;
    numero ! :string;
    birthday !: string;
    address !: string;
    age !: number;
    cin !: string;
    specialite !: string;
    role !: Role;
    chambre ! :null;
    pharmacie ! : null;
    reclamations !: [];
    prescriptions ! : [];
    payments !: [];

}
