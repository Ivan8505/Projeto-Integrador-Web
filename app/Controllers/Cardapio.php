<?php

namespace App\Controllers;

class Cardapio extends BaseController {

    public function CadastrarItem() {
        $data['titulo'] = 'Cadastrar Cardapio';
        $data['acao'] = 'Cadastrar';
        $data['validation'] = '';
        $data['msg'] = '';
        return view('Itens', $data);
    }

    public function CadastrarFoto() {
        $data['titulo'] = 'Cadastrar Cardapio';
        $data['acao'] = 'Cadastrar';
        $data['validation'] = '';
        $data['msg'] = '';

        $file = $this->request->getFile('userfile'); //Pega o arquivo
        $newName = $file->getRandomName(); //Modifica o nome
        $file->move(ROOTPATH . 'public/Imagens', $newName); //Move para a pasta

        $dados['Nome_Item'] = $this->request->getPost('Nome');
        $dados['Valor_Item'] = $this->request->getPost('Valor');
        $dados['Categoria'] = $this->request->getPost('Tipo');
        $dados['URL'] = "$newName";

        $ItenModel = new \App\Models\ItensModel;
        if ($ItenModel->insert($dados)) {
            $dados['msg'] = 'True';
        }
        return view('Itens', $data);
    }

    public function Remover($Id) {
        $session = session();
        $carrinho = $session->get("Carrinho");
        $qtn = $this->request->getPost($Id);
        for ($index = 0; $index < count($carrinho); $index++) {
            if ($Id == dot_array_search("$index.ID", $carrinho)) {
                $qtn = dot_array_search("$index.qtn", $carrinho) - $qtn;
                $carrinho[$index]["qtn"] = $qtn;
                if ($qtn <= 0) {
                    unset($carrinho[$index]);
                }
            }
        }
        $session->set('Carrinho', $carrinho);
        return redirect()->to("Carrinho");
    }

}
