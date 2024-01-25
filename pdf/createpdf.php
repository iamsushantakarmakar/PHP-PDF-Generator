<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "intern";
$conn = mysqli_connect($host, $user, $password, $db);

require('fpdf-lib/fpdf.php');
class PDF extends FPDF
{
    // Page header
    function Header()
    {
        // Logo
        $this->Image('./img/bg.jpg', 0, 0, 200);
        // Arial bold 15
        $this->SetFont('Arial', '', 16);
        // Move to the right
        $this->Cell(80);

        // Line break
        $this->Ln(30);
    }

    // Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-30);
        // Arial italic 8
        $this->SetFont('Arial', '', 8);
        // Page number
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'R');
    }
}
$id = 1;
$fetchQuery = mysqli_query($conn, "SELECT * FROM internship_2 WHERE id = '$id'");
while ($fetchData = mysqli_fetch_array($fetchQuery)) {
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();

    $pdf->SetFont('Arial', 'BU', 12);
    $pdf->Cell(185, 8, 'INTERNSHIP CONTRACT AGREEMENT', 0, 1, 'C');

    $pdf->SetFont('Arial', 'BU', 12);
    $pdf->Cell(5, 8, '', 0, 0, 'L');
    $pdf->Cell(55, 8, 'PARTIES', 0, 0, 'L');
    $pdf->Cell(5, 8, '', 0, 0, 'L');
    $pdf->Cell(115, 8, '', 0, 0, 'L');
    $pdf->Cell(5, 8, '', 0, 1, 'L');

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(10, 8, '', 0, 0, 'L');
    $pdf->MultiCell(175, 8, 'This Internship Agreement is entered into on 10-May-2022, by and between Digital Melodic, with an address of Gazi Para Lane Dhaltitha, Basirhat, West Bengal 743412, and ' . $fetchData['name'] . ', with an address of ' . $fetchData['address'] . '.', 0, 'L');

    $pdf->Cell(185, 4, '', 0, 1, 'L');

    $pdf->SetFont('Arial', 'BU', 12);
    $pdf->Cell(5, 8, '', 0, 0, 'L');
    $pdf->Cell(55, 8, 'INTERNSHIP POSITION', 0, 0, 'L');
    $pdf->Cell(5, 8, '', 0, 0, 'L');
    $pdf->Cell(115, 8, '', 0, 0, 'L');
    $pdf->Cell(5, 8, '', 0, 1, 'L');

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(10, 8, '', 0, 0, 'L');
    $pdf->MultiCell(175, 8, 'The Intern has been assigned to the position of Full Stack Web Development.', 0, 'L');

    $pdf->Cell(185, 4, '', 0, 1, 'L');

    $pdf->SetFont('Arial', 'BU', 12);
    $pdf->Cell(5, 8, '', 0, 0, 'L');
    $pdf->Cell(55, 8, 'DUTIES AND RESPONSIBILITIES', 0, 0, 'L');
    $pdf->Cell(5, 8, '', 0, 0, 'L');
    $pdf->Cell(115, 8, '', 0, 0, 'L');
    $pdf->Cell(5, 8, '', 0, 1, 'L');

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(10, 8, '', 0, 0, 'L');
    $pdf->MultiCell(175, 8, 'During the internship period, the Intern shall have the responsibility of performing any task given by his/her supervisor. ', 0, 'L');

    $pdf->Cell(185, 4, '', 0, 1, 'L');

    $pdf->Cell(10, 8, '', 0, 0, 'L');
    $pdf->MultiCell(175, 8, 'Intern cannot share any data of company with any other person or company. Even he/she is barred from store any sensitive data like code that he/she or other team members writing.', 0, 'L');

    $pdf->Cell(185, 4, '', 0, 1, 'L');

    $pdf->SetFont('Arial', 'BU', 12);
    $pdf->Cell(5, 8, '', 0, 0, 'L');
    $pdf->Cell(55, 8, 'PAY AND COMPENSATION', 0, 0, 'L');
    $pdf->Cell(5, 8, '', 0, 0, 'L');
    $pdf->Cell(115, 8, '', 0, 0, 'L');
    $pdf->Cell(5, 8, '', 0, 1, 'L');

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(10, 8, '', 0, 0, 'L');
    $pdf->MultiCell(175, 8, 'The Parties hereby agree that this internship is unpaid and that the Intern will not be compensated or paid for any services that he/she conducts at the Company.', 0, 'L');

    $pdf->Cell(185, 4, '', 0, 1, 'L');

    $pdf->Cell(10, 8, '', 0, 0, 'L');
    $pdf->MultiCell(175, 8, 'The Intern agrees that he/she will be compensated in knowledge, education and experience as consideration for the duties and responsibilities that he/she will undertake under this Agreement.', 0, 'L');

    $pdf->Cell(185, 4, '', 0, 1, 'L');

    $pdf->SetFont('Arial', 'BU', 12);
    $pdf->Cell(5, 8, '', 0, 0, 'L');
    $pdf->Cell(55, 8, 'WORKING HOURS', 0, 0, 'L');
    $pdf->Cell(5, 8, '', 0, 0, 'L');
    $pdf->Cell(115, 8, '', 0, 0, 'L');
    $pdf->Cell(5, 8, '', 0, 1, 'L');

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(10, 8, '', 0, 0, 'L');
    $pdf->MultiCell(175, 8, 'The Intern agrees that he/she will be a minimum working of 4 hours per day (Monday to Sunday), and work will do from home they do not need to come office.', 0, 'L');

    $pdf->Cell(185, 4, '', 0, 1, 'L');

    $pdf->SetFont('Arial', 'BU', 12);
    $pdf->Cell(5, 8, '', 0, 0, 'L');
    $pdf->Cell(55, 8, 'TERM OF AGREEMENT', 0, 0, 'L');
    $pdf->Cell(5, 8, '', 0, 0, 'L');
    $pdf->Cell(115, 8, '', 0, 0, 'L');
    $pdf->Cell(5, 8, '', 0, 1, 'L');

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(10, 8, '', 0, 0, 'L');
    $pdf->MultiCell(175, 8, 'This Agreement shall be effective on the date of signing this Agreement (the "Effective Date") and will end on 31st July 2022.', 0, 'L');

    $pdf->Cell(185, 4, '', 0, 1, 'L');
    $pdf->Cell(185, 4, '', 0, 1, 'L');
    $pdf->Cell(185, 4, '', 0, 1, 'L');

    $pdf->Cell(10, 8, '', 0, 0, 'L');
    $pdf->MultiCell(175, 8, 'The internship is related to an educational purpose and there is no guarantee or expectation that the activity will result in employment with the Company.', 0, 'L');

    $pdf->Cell(185, 4, '', 0, 1, 'L');

    $pdf->Cell(10, 8, '', 0, 0, 'L');
    $pdf->MultiCell(175, 8, 'The Intern does not replace or displace any employee of the Company.', 0, 'L');

    $pdf->Cell(185, 4, '', 0, 1, 'L');

    $pdf->Cell(10, 8, '', 0, 0, 'L');
    $pdf->MultiCell(175, 8, 'The Intern will receive direct and close supervision by an appropriate supervisor.', 0, 'L');

    $pdf->Cell(185, 4, '', 0, 1, 'L');

    $pdf->Cell(10, 8, '', 0, 0, 'L');
    $pdf->MultiCell(175, 8, 'Intern is not entitled to wages or any compensation or benefits for the time spent in the internship.', 0, 'L');

    $pdf->Cell(185, 4, '', 0, 1, 'L');

    $pdf->Cell(10, 8, '', 0, 0, 'L');
    $pdf->MultiCell(175, 8, 'The Company does not derive an immediate advantage from the activities performed by the Intern.', 0, 'L');

    $pdf->Cell(185, 4, '', 0, 1, 'L');

    $pdf->Cell(10, 8, '', 0, 0, 'L');
    $pdf->MultiCell(175, 8, 'Intern assumes all the risks of participating in the internship program. In consideration of the opportunity afforded to the Intern to participate in the internship program, Intern hereby agrees that he/she, his/her assignees, heirs, guardians, and legal representatives, will not make a claim against Company or any of its affiliated organizations, or either of their officers or directors collectively or individually, or any of its employees, for the injury of death to Intern or damage to his/her property, however caused, arising from his/her participation in the internship program. Without limiting the generality of the foregoing. Intern hereby waives and releases any rights, actions, or causes or action resulting from personal injury or death to him/her, or damage to his/her property, sustained in connection with his/her participation in the internship program.', 0, 'L');

    $pdf->Cell(185, 4, '', 0, 1, 'L');

    $pdf->SetFont('Arial', 'BU', 12);
    $pdf->Cell(5, 8, '', 0, 0, 'L');
    $pdf->Cell(55, 8, 'TERMINATION', 0, 0, 'L');
    $pdf->Cell(5, 8, '', 0, 0, 'L');
    $pdf->Cell(115, 8, '', 0, 0, 'L');
    $pdf->Cell(5, 8, '', 0, 1, 'L');

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(10, 8, '', 0, 0, 'L');
    $pdf->MultiCell(175, 8, 'This Agreement may be terminated if any of the following occurs:', 0, 'L');

    $pdf->Cell(185, 4, '', 0, 1, 'L');

    $pdf->Cell(10, 8, '', 0, 0, 'L');
    $pdf->MultiCell(175, 8, '1.	Immediately if the Intern breaches this Agreement.', 0, 'L');

    $pdf->Cell(185, 4, '', 0, 1, 'L');

    $pdf->Cell(10, 8, '', 0, 0, 'L');
    $pdf->MultiCell(175, 8, '2.	At any given time by providing written notice to the other party 30 days prior to terminating the Agreement.', 0, 'L');

    $pdf->Cell(185, 4, '', 0, 1, 'L');
    $pdf->Cell(185, 4, '', 0, 1, 'L');
    $pdf->Cell(185, 4, '', 0, 1, 'L');
    $pdf->Cell(185, 4, '', 0, 1, 'L');

    $pdf->Cell(10, 8, '', 0, 0, 'L');
    $pdf->MultiCell(175, 8, '3.	Company may at any time in its sole discretion, terminate the internship without notice or cause.', 0, 'L');

    $pdf->Cell(185, 4, '', 0, 1, 'L');

    $pdf->Cell(10, 8, '', 0, 0, 'L');
    $pdf->MultiCell(175, 8, 'Upon terminating this Agreement, the Intern will be required to return all the Companys materials, products or any other content at his/her earliest convenience, within 3 days of termination. ', 0, 'L');

    $pdf->Cell(185, 4, '', 0, 1, 'L');

    $pdf->SetFont('Arial', 'BU', 12);
    $pdf->Cell(5, 8, '', 0, 0, 'L');
    $pdf->Cell(55, 8, 'CONFIDENTIALITY', 0, 0, 'L');
    $pdf->Cell(5, 8, '', 0, 0, 'L');
    $pdf->Cell(115, 8, '', 0, 0, 'L');
    $pdf->Cell(5, 8, '', 0, 1, 'L');

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(10, 8, '', 0, 0, 'L');
    $pdf->MultiCell(175, 8, 'All terms and conditions of this Agreement and any materials provided during the term of the Agreement must be kept confidential by the Intern, unless the disclosure is required pursuant to process of law.', 0, 'L');

    $pdf->Cell(185, 4, '', 0, 1, 'L');

    $pdf->Cell(10, 8, '', 0, 0, 'L');
    $pdf->MultiCell(175, 8, 'Disclosing or using this information for any purpose beyond the scope of this Agreement, or beyond the exceptions set forth above, is expressly forbidden without the prior consent of the Company.', 0, 'L');

    $pdf->Cell(185, 4, '', 0, 1, 'L');

    $pdf->SetFont('Arial', 'BU', 12);
    $pdf->Cell(5, 8, '', 0, 0, 'L');
    $pdf->Cell(55, 8, 'INTELLECTUAL PROPERTY', 0, 0, 'L');
    $pdf->Cell(5, 8, '', 0, 0, 'L');
    $pdf->Cell(115, 8, '', 0, 0, 'L');
    $pdf->Cell(5, 8, '', 0, 1, 'L');

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(10, 8, '', 0, 0, 'L');
    $pdf->MultiCell(175, 8, 'The Intern agrees that any intellectual property provided to him/her by the Company will remain the sole property of the Company, including, but not limited to, copyrights, patents, trade secret rights, and other intellectual property rights associated with any ideas, concepts, techniques, inventions, processes, works of authorship, confidential information or trade secrets.', 0, 'L');

    $pdf->Cell(185, 4, '', 0, 1, 'L');

    $pdf->SetFont('Arial', 'BU', 12);
    $pdf->Cell(5, 8, '', 0, 0, 'L');
    $pdf->Cell(55, 8, 'REPRESENTATION AND WARRANTIES', 0, 0, 'L');
    $pdf->Cell(5, 8, '', 0, 0, 'L');
    $pdf->Cell(115, 8, '', 0, 0, 'L');
    $pdf->Cell(5, 8, '', 0, 1, 'L');

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(10, 8, '', 0, 0, 'L');
    $pdf->MultiCell(175, 8, 'Both Parties warrant that, by entering into this Agreement, they do not violate or infringe upon the rights of any third party or violate any other agreement between the Parties, individually, and any other person, organization, or business or any law or governmental regulation.', 0, 'L');

    $pdf->Cell(185, 4, '', 0, 1, 'L');
    $pdf->Cell(185, 4, '', 0, 1, 'L');
    $pdf->Cell(185, 4, '', 0, 1, 'L');
    $pdf->Cell(185, 4, '', 0, 1, 'L');
    $pdf->Cell(185, 4, '', 0, 1, 'L');
    $pdf->Cell(185, 4, '', 0, 1, 'L');
    $pdf->Cell(185, 4, '', 0, 1, 'L');

    $pdf->SetFont('Arial', 'BU', 12);
    $pdf->Cell(5, 8, '', 0, 0, 'L');
    $pdf->Cell(55, 8, 'LIMITATION OF LIABILITY', 0, 0, 'L');
    $pdf->Cell(5, 8, '', 0, 0, 'L');
    $pdf->Cell(115, 8, '', 0, 0, 'L');
    $pdf->Cell(5, 8, '', 0, 1, 'L');

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(10, 8, '', 0, 0, 'L');
    $pdf->MultiCell(175, 8, 'In no event shall the Company or the Intern be individually liable for any damages for breach of duty by third parties, unless the Companys or Interns act or failure to act involves intentional misconduct, fraud, or a knowing violation of the law.', 0, 'L');

    $pdf->Cell(185, 4, '', 0, 1, 'L');

    $pdf->SetFont('Arial', 'BU', 12);
    $pdf->Cell(5, 8, '', 0, 0, 'L');
    $pdf->Cell(55, 8, 'SEVERABILITY', 0, 0, 'L');
    $pdf->Cell(5, 8, '', 0, 0, 'L');
    $pdf->Cell(115, 8, '', 0, 0, 'L');
    $pdf->Cell(5, 8, '', 0, 1, 'L');

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(10, 8, '', 0, 0, 'L');
    $pdf->MultiCell(175, 8, 'In the event that any provision of this Agreement is found to be void and unenforceable by a court of competent jurisdiction, then the remaining provisions will remain in force in accordance with the Parties intention.', 0, 'L');

    $pdf->Cell(185, 4, '', 0, 1, 'L');

    $pdf->SetFont('Arial', 'BU', 12);
    $pdf->Cell(5, 8, '', 0, 0, 'L');
    $pdf->Cell(55, 8, 'ENTIRE AGREEMENT', 0, 0, 'L');
    $pdf->Cell(5, 8, '', 0, 0, 'L');
    $pdf->Cell(115, 8, '', 0, 0, 'L');
    $pdf->Cell(5, 8, '', 0, 1, 'L');

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(10, 8, '', 0, 0, 'L');
    $pdf->MultiCell(175, 8, 'This Agreement contains the entire agreement and understanding among the Parties to it with respect to its subject matter, and supersedes all prior agreements, understandings, inducements and conditions, express or implied, oral or written, of any nature whatsoever with respect to its subject matter. The express terms of the Agreement control and supersede any course of performance and/or usage of the trade inconsistent with any of its terms.', 0, 'L');

    $pdf->Cell(185, 4, '', 0, 1, 'L');

    $pdf->SetFont('Arial', 'BU', 12);
    $pdf->Cell(5, 8, '', 0, 0, 'L');
    $pdf->Cell(55, 8, 'SIGNATURE', 0, 0, 'L');
    $pdf->Cell(5, 8, '', 0, 0, 'L');
    $pdf->Cell(115, 8, '', 0, 0, 'L');
    $pdf->Cell(5, 8, '', 0, 1, 'L');

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(10, 8, '', 0, 0, 'L');
    $pdf->MultiCell(175, 8, 'The Parties hereby agree to the terms and conditions set forth in this Agreement and such is demonstrated by their signatures below:', 0, 'L');

    $pdf->Cell(185, 6, '', 0, 1, 'L');

    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(13, 8, '', 0, 0, 'L');
    $pdf->Cell(85, 8, '', 0, 1, 'L');
    $pdf->Cell(13, 8, '', 0, 0, 'L');
    $pdf->Image('./img/ss.png', 30, 207, 30);
    $pdf->Cell(185, 6, '', 0, 1, 'L');

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(13, 5, '', 0, 0, 'L');
    $pdf->Cell(85, 5, 'Sushanta Karmakar', 0, 1, 'L');
    $pdf->SetFont('Arial', '', 9);
    $pdf->Cell(13, 4, '', 0, 0, 'L');
    $pdf->Cell(85, 4, 'CEO of Digital Melodic', 0, 1, 'L');

    $pdf->Cell(185, 6, '', 0, 1, 'L');
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(5, 5, '', 0, 0, 'L');
    $pdf->Cell(85, 6, 'I ' . $fetchData['name'] . ', hereby declare that I read the agreement thoroughly and give my consent.', 0, 1, 'L');

    $pdf->Cell(185, 6, '', 0, 1, 'L');

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(13, 5, '', 0, 0, 'L');
    $pdf->Cell(85, 5, 'Intern Name: ' . $fetchData['name'], 0, 1, 'L');
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(185, 6, '', 0, 1, 'L');
    $pdf->Cell(13, 8, '', 0, 0, 'L');
    $pdf->Cell(85, 8, 'Signature:_______________________', 0, 1, 'L');

    $pdf->Output("certificate/" . $fetchData['name'] . '.pdf', 'F');
}
