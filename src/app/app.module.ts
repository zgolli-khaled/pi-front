import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { FormsModule } from '@angular/forms';
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { DashboardComponent } from './backOffice/dashboard/dashboard.component';
import { LoginComponent } from './login/login/login.component';
import { RegisterComponent } from './login/register/register.component';
import { ForgotPasswordComponent } from './login/forgot-password/forgot-password.component';
import { DoctorsTableComponent } from './backOffice/doctors-table/doctors-table.component';
import { PrescriptionComponent } from './backOffice/prescription/prescription.component';
import { MenuComponent } from './composants_backOffice/menu/menu.component';
import { ReclamationComponent } from './backOffice/reclamation/reclamation.component';
import {HttpClientModule} from "@angular/common/http";

@NgModule({
  declarations: [
    AppComponent,
    DashboardComponent,
    LoginComponent,
    RegisterComponent,
    ForgotPasswordComponent,
    DoctorsTableComponent,
    PrescriptionComponent,
    MenuComponent,
    ReclamationComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule,
    FormsModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
