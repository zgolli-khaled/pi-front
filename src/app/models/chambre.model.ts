import { User } from "./user.model";

export class Chambre {
    idChambre ! : number;
    etage ! : number ;
    num ! : String;
    status ! : String;
    user ! : User;
}
