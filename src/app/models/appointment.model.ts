import { User } from "./user.model";

export class Appointment {
    idApp !: number;
    dateApp ! : Date;
    heureDebut ! : string;
    heureFin ! : string;
    description !: string;
    user ! : User;
    


    


}
