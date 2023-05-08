import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { DashboardComponent } from './backOffice/dashboard/dashboard.component';
import { LoginComponent } from './login/login/login.component';
import { ForgotPasswordComponent } from './login/forgot-password/forgot-password.component';
import { RegisterComponent } from './login/register/register.component';
import { NotFoundComponent } from './not-found/not-found.component';
import { DoctorsTableComponent } from './backOffice/doctors-table/doctors-table.component';
import { HomePageComponent } from './frontOffice/home-page/home-page.component';
import { AddAppointmentComponent } from './backOffice/add-appointment/add-appointment.component';
import { ChambresTableComponent } from './backOffice/chambres-table/chambres-table.component';
import { ChambreComponent } from './frontOffice/chambre/chambre.component';
import { UserAppComponent } from './frontOffice/user-app/user-app.component';
import { DeleteAppComponent } from './frontOffice/delete-app/delete-app.component';
import { MedecinAppComponent } from './frontOffice/medecin-app/medecin-app.component';
import { MedecinModifAppComponent } from './frontOffice/medecin-modif-app/medecin-modif-app.component';
import { IsAdminGuard } from './_gards/is-admin.guard';
import { IsMedecinGuard } from './_gards/is-medecin.guard';
import { ResetPasswordComponent } from './login/reset-password/reset-password.component';


const routes: Routes = [
  {
    path: "home", component: HomePageComponent
  },
  {
    path: "dashboard",
    component: DashboardComponent,
    canActivate: [IsAdminGuard] // add the guard here
  },
  {
    path: "user/appointment/add", component: UserAppComponent
  },
  {
    path: "user/appointment", component: DeleteAppComponent
  },

  {
    path: "medecin/appointment", component: MedecinAppComponent
  },
  {
    path: "medecin/appointment/modif", component: MedecinModifAppComponent
  },
  {
    path: "appointments/addAppointment", component: AddAppointmentComponent
  },

  {
    path: "login", component: LoginComponent
  },
  {
    path: "chambre", component: ChambresTableComponent
  },
  {
    path: "resetpassword", component: ResetPasswordComponent
  },
  {
    path: "docTable",
     component: DoctorsTableComponent,
    canActivate: [IsMedecinGuard]
  },
  {
    path: "forgotPassword", component: ForgotPasswordComponent
  },
  {
    path: "register", component: RegisterComponent
  },
  {
    path: "homechambre", component: ChambreComponent
  },
  {
    path: '', redirectTo: 'home', pathMatch: 'full'
  },
  {
    path: "appointments", component: DoctorsTableComponent
  }, {
    path: '**', component: NotFoundComponent
  },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
