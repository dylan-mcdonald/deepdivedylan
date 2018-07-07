import {Injectable} from "@angular/core";
import {HttpClient} from "@angular/common/http";
import {Observable} from "rxjs";
import {Resume} from "../classes/resume";

@Injectable()
export class ResumeService {
	constructor(protected http: HttpClient) {}

	private resumeUrl = "api/jsonresume/";

	getResumeJson() : Observable<Resume> {
		return(this.http.get<Resume>(this.resumeUrl));
	}
}
