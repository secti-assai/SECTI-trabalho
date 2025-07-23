import { Button } from "@/components/ui/button"
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card"
import { Input } from "@/components/ui/input"
import { Separator } from "@/components/ui/separator"
import { Building2, FileText, Users, Phone, Mail, MapPin, Clock, Search, ExternalLink } from "lucide-react"

export default function Component() {
  return (
    <div className="min-h-screen bg-gray-50">
      {/* Header */}
      <header className="bg-blue-900 text-white">
        <div className="container mx-auto px-4 py-4">
          <div className="flex items-center justify-between">
            <div className="flex items-center gap-4">
              <Building2 className="h-10 w-10" />
              <div>
                <h1 className="text-xl font-bold">Prefeitura Municipal</h1>
                <p className="text-blue-200 text-sm">Cidade de São Paulo</p>
              </div>
            </div>
            <div className="hidden md:flex items-center gap-4">
              <div className="flex items-center gap-2 text-sm">
                <Clock className="h-4 w-4" />
                <span>Seg-Sex: 8h às 17h</span>
              </div>
              <div className="flex items-center gap-2 text-sm">
                <Phone className="h-4 w-4" />
                <span>(11) 3000-0000</span>
              </div>
            </div>
          </div>
        </div>
      </header>

      {/* Navigation */}
      <nav className="bg-blue-800 text-white">
        <div className="container mx-auto px-4">
          <div className="flex items-center justify-between">
            <div className="flex">
              <a href="#" className="px-4 py-3 hover:bg-blue-700 transition-colors">
                Início
              </a>
              <a href="#" className="px-4 py-3 hover:bg-blue-700 transition-colors">
                Serviços
              </a>
              <a href="#" className="px-4 py-3 hover:bg-blue-700 transition-colors">
                Transparência
              </a>
              <a href="#" className="px-4 py-3 hover:bg-blue-700 transition-colors">
                Notícias
              </a>
              <a href="#" className="px-4 py-3 hover:bg-blue-700 transition-colors">
                Contato
              </a>
            </div>
            <div className="flex items-center gap-2">
              <Input placeholder="Buscar..." className="w-48 h-8 text-black" />
              <Button size="sm" variant="secondary">
                <Search className="h-4 w-4" />
              </Button>
            </div>
          </div>
        </div>
      </nav>

      {/* Main Content */}
      <main className="container mx-auto px-4 py-8">
        {/* Hero Section */}
        <section className="mb-12">
          <div className="bg-white rounded-lg shadow-sm border p-8 text-center">
            <h2 className="text-3xl font-bold text-gray-900 mb-4">Portal de Serviços da Prefeitura</h2>
            <p className="text-gray-600 text-lg mb-6">Acesse os serviços municipais de forma rápida e eficiente</p>
            <div className="flex flex-wrap justify-center gap-4">
              <Button className="bg-blue-900 hover:bg-blue-800">Serviços Online</Button>
              <Button variant="outline">Protocolo Digital</Button>
              <Button variant="outline">2ª Via de Documentos</Button>
            </div>
          </div>
        </section>

        {/* Services Grid */}
        <section className="mb-12">
          <h3 className="text-2xl font-bold text-gray-900 mb-6">Serviços Principais</h3>
          <div className="grid md:grid-cols-3 gap-6">
            <Card>
              <CardHeader>
                <CardTitle className="flex items-center gap-2">
                  <FileText className="h-5 w-5 text-blue-900" />
                  Documentos
                </CardTitle>
                <CardDescription>Emissão de certidões e documentos municipais</CardDescription>
              </CardHeader>
              <CardContent>
                <Button variant="outline" className="w-full bg-transparent">
                  Acessar Serviço
                  <ExternalLink className="h-4 w-4 ml-2" />
                </Button>
              </CardContent>
            </Card>

            <Card>
              <CardHeader>
                <CardTitle className="flex items-center gap-2">
                  <Building2 className="h-5 w-5 text-blue-900" />
                  Licenças
                </CardTitle>
                <CardDescription>Solicitação de alvarás e licenças</CardDescription>
              </CardHeader>
              <CardContent>
                <Button variant="outline" className="w-full bg-transparent">
                  Acessar Serviço
                  <ExternalLink className="h-4 w-4 ml-2" />
                </Button>
              </CardContent>
            </Card>

            <Card>
              <CardHeader>
                <CardTitle className="flex items-center gap-2">
                  <Users className="h-5 w-5 text-blue-900" />
                  Atendimento
                </CardTitle>
                <CardDescription>Agendamento e protocolo de solicitações</CardDescription>
              </CardHeader>
              <CardContent>
                <Button variant="outline" className="w-full bg-transparent">
                  Acessar Serviço
                  <ExternalLink className="h-4 w-4 ml-2" />
                </Button>
              </CardContent>
            </Card>
          </div>
        </section>

        {/* News and Announcements */}
        <section className="mb-12">
          <div className="grid md:grid-cols-2 gap-8">
            <div>
              <h3 className="text-2xl font-bold text-gray-900 mb-6">Notícias</h3>
              <div className="space-y-4">
                <Card>
                  <CardContent className="p-4">
                    <h4 className="font-semibold mb-2">Nova praça será inaugurada no centro da cidade</h4>
                    <p className="text-gray-600 text-sm mb-2">
                      A prefeitura anuncia a inauguração da nova praça central, com área de lazer e equipamentos de
                      exercício.
                    </p>
                    <p className="text-gray-500 text-xs">15 de Janeiro, 2024</p>
                  </CardContent>
                </Card>

                <Card>
                  <CardContent className="p-4">
                    <h4 className="font-semibold mb-2">Campanha de vacinação contra a gripe</h4>
                    <p className="text-gray-600 text-sm mb-2">
                      Inicia-se na próxima semana a campanha municipal de vacinação contra a gripe para idosos e grupos
                      de risco.
                    </p>
                    <p className="text-gray-500 text-xs">12 de Janeiro, 2024</p>
                  </CardContent>
                </Card>
              </div>
            </div>

            <div>
              <h3 className="text-2xl font-bold text-gray-900 mb-6">Avisos Importantes</h3>
              <div className="space-y-4">
                <Card className="border-orange-200 bg-orange-50">
                  <CardContent className="p-4">
                    <h4 className="font-semibold text-orange-800 mb-2">Manutenção no sistema</h4>
                    <p className="text-orange-700 text-sm">
                      O sistema de protocolo digital estará em manutenção no dia 20/01 das 2h às 6h.
                    </p>
                  </CardContent>
                </Card>

                <Card className="border-blue-200 bg-blue-50">
                  <CardContent className="p-4">
                    <h4 className="font-semibold text-blue-800 mb-2">Novo horário de atendimento</h4>
                    <p className="text-blue-700 text-sm">
                      A partir de fevereiro, o atendimento presencial será das 8h às 16h.
                    </p>
                  </CardContent>
                </Card>
              </div>
            </div>
          </div>
        </section>

        {/* Contact Information */}
        <section>
          <h3 className="text-2xl font-bold text-gray-900 mb-6">Informações de Contato</h3>
          <Card>
            <CardContent className="p-6">
              <div className="grid md:grid-cols-3 gap-6">
                <div className="flex items-start gap-3">
                  <MapPin className="h-5 w-5 text-blue-900 mt-1" />
                  <div>
                    <h4 className="font-semibold mb-1">Endereço</h4>
                    <p className="text-gray-600 text-sm">
                      Rua da Prefeitura, 123
                      <br />
                      Centro - São Paulo/SP
                      <br />
                      CEP: 01000-000
                    </p>
                  </div>
                </div>

                <div className="flex items-start gap-3">
                  <Phone className="h-5 w-5 text-blue-900 mt-1" />
                  <div>
                    <h4 className="font-semibold mb-1">Telefones</h4>
                    <p className="text-gray-600 text-sm">
                      Geral: (11) 3000-0000
                      <br />
                      Ouvidoria: (11) 3000-0001
                      <br />
                      Emergência: 156
                    </p>
                  </div>
                </div>

                <div className="flex items-start gap-3">
                  <Mail className="h-5 w-5 text-blue-900 mt-1" />
                  <div>
                    <h4 className="font-semibold mb-1">E-mail</h4>
                    <p className="text-gray-600 text-sm">
                      contato@prefeitura.sp.gov.br
                      <br />
                      ouvidoria@prefeitura.sp.gov.br
                    </p>
                  </div>
                </div>
              </div>
            </CardContent>
          </Card>
        </section>
      </main>

      {/* Footer */}
      <footer className="bg-gray-800 text-white mt-16">
        <div className="container mx-auto px-4 py-8">
          <div className="grid md:grid-cols-4 gap-6">
            <div>
              <h4 className="font-semibold mb-3">Prefeitura Municipal</h4>
              <p className="text-gray-300 text-sm">Trabalhando para o desenvolvimento e bem-estar da nossa cidade.</p>
            </div>

            <div>
              <h4 className="font-semibold mb-3">Links Úteis</h4>
              <ul className="space-y-2 text-sm">
                <li>
                  <a href="#" className="text-gray-300 hover:text-white">
                    Portal da Transparência
                  </a>
                </li>
                <li>
                  <a href="#" className="text-gray-300 hover:text-white">
                    Licitações
                  </a>
                </li>
                <li>
                  <a href="#" className="text-gray-300 hover:text-white">
                    Concursos
                  </a>
                </li>
                <li>
                  <a href="#" className="text-gray-300 hover:text-white">
                    Legislação
                  </a>
                </li>
              </ul>
            </div>

            <div>
              <h4 className="font-semibold mb-3">Serviços</h4>
              <ul className="space-y-2 text-sm">
                <li>
                  <a href="#" className="text-gray-300 hover:text-white">
                    IPTU
                  </a>
                </li>
                <li>
                  <a href="#" className="text-gray-300 hover:text-white">
                    ISS
                  </a>
                </li>
                <li>
                  <a href="#" className="text-gray-300 hover:text-white">
                    Alvarás
                  </a>
                </li>
                <li>
                  <a href="#" className="text-gray-300 hover:text-white">
                    Certidões
                  </a>
                </li>
              </ul>
            </div>

            <div>
              <h4 className="font-semibold mb-3">Horário de Funcionamento</h4>
              <p className="text-gray-300 text-sm">
                Segunda a Sexta-feira
                <br />
                8:00 às 17:00
                <br />
                <br />
                Sábados: 8:00 às 12:00
              </p>
            </div>
          </div>

          <Separator className="my-6 bg-gray-700" />

          <div className="text-center text-gray-400 text-sm">
            <p>&copy; 2024 Prefeitura Municipal. Todos os direitos reservados.</p>
          </div>
        </div>
      </footer>
    </div>
  )
}
