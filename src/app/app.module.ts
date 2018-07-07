import {NgModule} from "@angular/core";
import {BrowserModule} from "@angular/platform-browser";
import {FormsModule} from "@angular/forms";
import {HttpClientModule} from "@angular/common/http";
import {ReCaptchaModule} from "angular2-recaptcha";
import {AppComponent} from "./app.component";
import {allAppComponents, appRoutingProviders, routing} from "./app.routes";
import {MailService} from "./services/mail-service";
import {ResumeService} from "./services/resume-service";

const moduleDeclarations = [AppComponent];

@NgModule({
	imports:      [BrowserModule, FormsModule, HttpClientModule, ReCaptchaModule, routing],
	declarations: [...moduleDeclarations, ...allAppComponents],
	bootstrap:    [AppComponent],
	providers:    [appRoutingProviders, MailService, ResumeService]
})
export class AppModule {}
