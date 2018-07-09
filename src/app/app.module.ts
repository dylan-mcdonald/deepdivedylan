import {NgModule} from "@angular/core";
import {BrowserModule} from "@angular/platform-browser";
import {FormsModule} from "@angular/forms";
import {HttpClientModule} from "@angular/common/http";
import {ReCaptchaModule} from "angular2-recaptcha";
import {FontAwesomeModule} from "@fortawesome/angular-fontawesome";
import {AppComponent} from "./app.component";
import {allAppComponents, appRoutingProviders, routing} from "./app.routes";
import {MailService} from "./shared/services/mail.service";
import {ResumeService} from "./shared/services/resume.service";

const moduleDeclarations = [AppComponent];

@NgModule({
	imports:      [BrowserModule, FormsModule, HttpClientModule, FontAwesomeModule, ReCaptchaModule, routing],
	declarations: [...moduleDeclarations, ...allAppComponents],
	bootstrap:    [AppComponent],
	providers:    [appRoutingProviders, MailService, ResumeService]
})
export class AppModule {}
