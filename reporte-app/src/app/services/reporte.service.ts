import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class ReporteService {

  private api="http://127.0.0.1:8000/api/"
  constructor(private http:HttpClient) { }
  showpdf(){
    return this.http.get(this.api+"show-pdf",{responseType:'blob'})
  }
  downloadpf(){
    return this.http.get(this.api+"download-pdf",{responseType:'blob'})
  }
  todosArticulos(){
    return this.http.get(this.api+"articulos")
  }
}
