#[Route('/admin', name: 'app_admin_dashboard')]
class AdminController extends AbstractController {
    #[Route('/', name: 'app_admin_index')]
    public function index(VideojuegoRepository $vRepo, UsuarioRepository $uRepo): Response {
        // Requisito 44: Estadísticas
        return $this->render('admin/index.html.twig', [
            'num_juegos' => $vRepo->count([]),
            'num_usuarios' => $uRepo->count([]),
        ]);
    }
}
