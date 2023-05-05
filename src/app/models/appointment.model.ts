import { User } from "./user.model";

export class Appointment {
    idApp !: number;
    dateApp ! : string;
    heureDebut ! : string;
    description !: string;
    state !: string;
    cin !: string;
    user ! : User;
    


    


}
