import {NgModule} from "@angular/core";
import {BrowserModule} from "@angular/platform-browser";
import {FormsModule} from "@angular/forms";
import {AppComponent} from "./app.component";
import {allAppComponents, appRoutingProviders, routing} from "./app.routes";

const moduleDeclarations = [AppComponent];

@NgModule({
	imports:      [BrowserModule, FormsModule, routing],
	declarations: [...moduleDeclarations, allAppComponents],
	bootstrap:    [AppComponent],
	providers:    [appRoutingProviders]
})
export class AppModule {}
