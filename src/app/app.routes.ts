import {RouterModule, Routes} from "@angular/router";
import {AdvocacyComponent} from "./components/advocacy-component";
import {ContactComponent} from "./components/contact-component";
import {CodingComponent} from "./components/coding-component";
import {ResumeComponent} from "./components/resume-component";
import {SplashComponent} from "./components/splash-component";
import {TeachingComponent} from "./components/teaching-component";
import {DeepDiveInterceptor} from "./shared/interceptors/deep.dive.interceptor";
import {HTTP_INTERCEPTORS} from "@angular/common/http";


export const allAppComponents = [AdvocacyComponent, ContactComponent, CodingComponent, SplashComponent, ResumeComponent, TeachingComponent];

export const routes: Routes = [
	{path: "advocacy", component: AdvocacyComponent},
	{path: "coding", component: CodingComponent},
	{path: "contact", component: ContactComponent},
	{path: "resume", component: ResumeComponent},
	{path: "teaching", component: TeachingComponent},
	{path: "", component: SplashComponent}
];

export const appRoutingProviders: any[] = [
	{provide: HTTP_INTERCEPTORS, useClass: DeepDiveInterceptor, multi: true}
];

export const routing = RouterModule.forRoot(routes);
