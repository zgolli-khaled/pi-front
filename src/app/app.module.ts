import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { DashboardComponent } from './backOffice/dashboard/dashboard.component';
import { LoginComponent } from './login/login/login.component';
import { RegisterComponent } from './login/register/register.component';
import { ForgotPasswordComponent } from './login/forgot-password/forgot-password.component';
import { NotFoundComponent } from './not-found/not-found.component';
import { DoctorsTableComponent } from './backOffice/doctors-table/doctors-table.component';
import { NavBarComponent } from './nav-bar/nav-bar.component';
import { HomePageComponent } from './frontOffice/home-page/home-page.component';

import { HttpClientModule } from '@angular/common/http';
import { FormsModule } from '@angular/forms';
import { AddAppointmentComponent } from './backOffice/add-appointment/add-appointment.component';
import { UserAppComponent } from './frontOffice/user-app/user-app.component';
import { FullCalendarModule } from '@fullcalendar/angular';
import { DeleteAppComponent } from './frontOffice/delete-app/delete-app.component';
import { MedecinAppComponent } from './frontOffice/medecin-app/medecin-app.component';
import { MedecinModifAppComponent } from './frontOffice/medecin-modif-app/medecin-modif-app.component';

@NgModule({
  declarations: [
    AppComponent,
    DashboardComponent,
    LoginComponent,
    RegisterComponent,
    ForgotPasswordComponent,
    NotFoundComponent,
    DoctorsTableComponent,
    NavBarComponent,
    HomePageComponent,
    AddAppointmentComponent,
    UserAppComponent,
    DeleteAppComponent,
    MedecinAppComponent,
    MedecinModifAppComponent
    
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule,
    FormsModule,
     FullCalendarModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
