import { Component } from '@angular/core';
import { ReporteService } from './services/reporte.service';
import { Router } from '@angular/router';
@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'reporte-app';
  constructor(private reporteService:ReporteService,private router:Router){}
  ver(){
   /*  this.reporteService.showpdf().subscribe(e=>{
      console.log(e)
    }) */
    this.reporteService.showpdf().subscribe((data:Blob)=>{
      const fileURL = URL.createObjectURL(data);
      window.open(fileURL);
    })
  }
  descargar(){
    this.reporteService.downloadpf().subscribe(data=>{
      const url = URL.createObjectURL(data);
      const link = document.createElement('a');
      link.href = url;
      link.download = 'reporte.pdf';
      link.click();
    },err=>console.log(err))
  }
}
