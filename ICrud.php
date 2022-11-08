<?php
interface ICrud{
    public function create();
    public function read();
    public function update();
    public function delete();
}

interface IExport{
    public function exportPDF();
    public function exportExcel();
}

class Crud implements ICrud,IExport
{
    public function create()
    {
        // TODO: Implement create() method.
    }

    public function read()
    {
        // TODO: Implement read() method.
    }

    public function update()
    {
        // TODO: Implement update() method.
    }

    public function delete()
    {
        // TODO: Implement delete() method.
    }

    public function exportPDF()
    {
        // TODO: Implement exportPDF() method.
    }

    public function exportExcel()
    {
        // TODO: Implement exportExcel() method.
    }


}