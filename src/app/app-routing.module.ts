import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { DashboardComponent } from './backOffice/dashboard/dashboard.component';
import { LoginComponent } from './login/login/login.component';
import { ForgotPasswordComponent } from './login/forgot-password/forgot-password.component';
import { RegisterComponent } from './login/register/register.component';
import { NotFoundComponent } from './not-found/not-found.component';
import { DoctorsTableComponent } from './backOffice/doctors-table/doctors-table.component';
import { IsAdminGuard } from './_gards/is-admin.guard';
import { IsMedecinGuard } from './_gards/is-medecin.guard';
import { BoardUserComponent } from './board-user/board-user.component';
import { ResetPasswordComponent } from './login/reset-password/reset-password.component';



const routes: Routes = [
  {
    path: "dashboard",
    component: DashboardComponent,
    canActivate: [IsAdminGuard] // add the guard here
  },
  {
    path: "login", component: LoginComponent
  },
  {
    path: "forgotPassword", component: ForgotPasswordComponent
  },
  {
    path: "register", component: RegisterComponent
  },
  {
    path: "board-user", component: BoardUserComponent 
  },
  {
    path: "resetpassword", component: ResetPasswordComponent
  },
  {
    path: '',redirectTo : 'login',pathMatch:'full'
  },
  
  {
    path: "docTable",
     component: DoctorsTableComponent,
    canActivate: [IsMedecinGuard]
  },{
    path: '**',component: NotFoundComponent
  },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
