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
import { DisplayReclamComponent } from './backOffice/display-reclam/display-reclam.component';
import {MatDialogModule} from "@angular/material/dialog";
import { RecDialogComponent } from './backOffice/rec-dialog/rec-dialog.component';
import { DiscussionComponent } from './backOffice/discussion/discussion.component';

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
    DisplayReclamComponent,
    RecDialogComponent,
    DiscussionComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule,
    FormsModule,
    MatDialogModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
