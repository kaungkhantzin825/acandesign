# Download Page (download.php) - Complete Design Analysis

## Overview
A dedicated page for downloading sales materials and company resources with a professional, document-focused layout.

---

## Page Structure

```
┌──────────────────────────────────────────────────┐
│ Header (Site Navigation)                         │
├──────────────────────────────────────────────────┤
│ Hero Banner Image (Full width, 86%)             │
├──────────────────────────────────────────────────┤
│ Breadcrumb (HOME › 営業資料)                     │
├──────────────────────────────────────────────────┤
│ ┌────────────────────┬──────────────────────┐   │
│ │ Left: Download     │ Right: Sidebar       │   │
│ │ Panel (List)       │ - Merits             │   │
│ │                    │ - Myanmar CTA        │   │
│ └────────────────────┴──────────────────────┘   │
├──────────────────────────────────────────────────┤
│ Contact Section (Phone + Email)                 │
├──────────────────────────────────────────────────┤
│ Footer                                           │
└──────────────────────────────────────────────────┘
```

---

## Key Components

### 1. **Site Header** (Navigation)
- **Logo**: A CAN SOLUTIONS with icon
- **Navigation Links**: 
  - サービス
  - BLOG
  - Myanmar situation
  - 会社情報
- **CTA Buttons**:
  - 資料ダウンロード (Red button)
  - お問い合わせ (Blue button)
- **Font**: Anonymous Pro (monospace)
- **Style**: Bold links with hover effects

---

### 2. **Hero Section**
```css
Width: 86% container
Background: White
Image: assets/img/asdasd.png (full-width banner)
```

**Purpose**: Visual introduction to download page

---

### 3. **Breadcrumb Navigation**
```
HOME › 営業資料
```

**Styling**:
- Font size: 0.78rem
- Blue links (#12499e)
- Hover: underline
- Left margin: 249px (desktop)

---

### 4. **Main Body - Two Column Layout**

#### **Grid Structure** (Desktop):
```css
grid-template-columns: 1fr 340px
gap: 1.5rem
width: 86%
```

#### **Left Column: Download Panel**

**Panel Design**:
```css
Background: White
Border: 1.5px solid black
Border-radius: 12px
Height: 600px (desktop)
Width: 697px (desktop)
Left margin: 77px (desktop)
```

**Panel Header**:
- Icon (42px × 38px image)
- Title: "ダウンロード資料一覧"
- Font size: 1.1rem
- Font weight: 700

**Panel Subtitle**:
- Text: "資料の概要をご確認の上、ダウンロードしてください。"
- Font size: 0.83rem
- Color: #6b7280 (gray)

**Scrollable Area**:
- Custom scrollbar design (14px width)
- Dark thumb (#5a5a5a)
- Arrow buttons at top/bottom
- Hover effect: darker (#333)

**Download Cards**:

Each card contains:
```
┌─────────────────────────────────────────────┐
│ [Thumbnail]  Title                [Button]  │
│  140×100     Description                    │
│              PDF/6.3MB                      │
└─────────────────────────────────────────────┘
```

**Card Styling**:
- Padding: 1.2rem 1.4rem
- Border bottom: 1px solid #eef1f7
- Hover: background change

**Thumbnail**:
- Size: 140px × 100px
- Border-radius: 32px (large rounded)
- Border: 1px solid #d1d9e6
- Object-fit: cover

**Download Button**:
- Background: #1a5fd4 (blue)
- Color: White
- Border-radius: 999px (pill shape)
- Padding: 0.7rem 1.6rem
- Icon: Download arrow SVG
- Hover: darker blue (#1450b8)

**Bottom Notice**:
- Blue exclamation icon in circle
- Text: "その他の資料やご不明点がございましたら、お気軽にお問い合わせください"
- Link to contact section
- Color: #1e40af (blue)

---

#### **Right Column: Sidebar**

**1. Merits Section**

**Title**: "資料ダウンロードのメリット"
- Color: #12499e (blue)
- Font size: 15px
- Font weight: 700

**Merit Items** (4 items):

Each item:
```
[Icon 42×42]  Title (strong, 12px)
              Description (0.75rem, gray)
```

**Icons**: 
- PNG images (42px × 42px)
- Various icons for each benefit

**Benefits listed**:
1. サービス内容を詳しく理解できる
2. 導入事例から成果をイメージ
3. 検討をスムーズに進められる
4. いつでも自由にダウンロード

**2. Myanmar CTA Card**

```css
Border-radius: 8px
Min-height: 185px
Position: relative
```

**Background Image**:
- File: uri_ifs___M_udNq4QUo4H9V2Dwz57bjkSbSM7n5L5NYbOnl6LDudbw.jpg
- Full cover with overlay
- Position: absolute

**Content**:
- Text: "ミャンマー・日本のリソースを活かし合わせ、業務改革を支援します。"
- Color: White
- Font size: 0.82rem
- Font weight: 700
- Text align: Left

**Button**:
- Text: "サービス一覧を見る ›"
- Background: White
- Color: Black
- Padding: 0.55rem 1.2rem
- Border-radius: 6px
- Full width button
- Hover: semi-transparent white

---

### 5. **Contact Section**

**Container**:
```css
Width: 86%
Background: #F7F7F7 (light gray)
Border-radius: 12px
Padding: 0 0 2rem
Left padding: 77px (desktop)
```

**Title**: "お急ぎの方はこちらからもご連絡いただけます"
- Font size: 15px
- Font weight: 700
- Color: #13499e (blue)

**Grid Layout**:
```css
grid-template-columns: 1fr 1fr
gap: 1.2rem
```

**Contact Cards** (2 cards):

**Card Design**:
```css
Background: White
Border: 1px solid #e2e8f0
Border-radius: 10px
Padding: 1.3rem 1.2rem
```

**Structure**:
```
[Icon 44×44]  Label (0.82rem, bold)
              Hours (0.71rem, gray)
              Value (1.15rem, bold, blue)
```

**Card 1: Phone**
- Icon: Phone SVG (blue outline)
- Label: "電話で相談する"
- Hours: "平日 10:00〜17:00"
- Value: "(082)209-6669"

**Card 2: Email**
- Icon: Envelope SVG (blue outline)
- Label: "メールで相談する"
- Value: info@acan-sol.com (clickable link)

---

### 6. **Footer**

**Reuses site footer** from main.css with:
- Background: White
- Navigation links
- Social links (Substack, LinkedIn)
- Copyright notice
- Logo

---

## Color Palette

| Element | Color | Hex |
|---------|-------|-----|
| Primary Blue | Bright blue | #12499e |
| Dark Blue | Button | #1a5fd4 |
| Button Hover | Darker blue | #1450b8 |
| Red CTA | Download button | #dc2626 |
| Red Hover | Darker red | #b91c1c |
| Text Primary | Dark | #1a1a2e |
| Text Secondary | Gray | #374151 |
| Text Muted | Light gray | #6b7280 |
| Border | Light | #e2e8f0 |
| Background | Off-white | #F7F7F7 |

---

## Typography

### Fonts Used:
1. **Anonymous Pro** - Monospace (navigation, headings)
2. **Noto Sans JP** - Japanese text (body)
3. **Roboto Mono** - Meta information

### Font Sizes:
- Navigation: 15px
- Panel title: 1.1rem
- Card title: 1rem
- Description: 0.82rem
- Meta: 0.75rem
- Contact value: 1.15rem

---

## Layout Measurements

### Container Widths:
- Main body: 86% of viewport
- Panel: 697px (desktop)
- Sidebar: 340px (desktop)

### Spacing:
- Gap between columns: 1.5rem
- Card padding: 1.2rem 1.4rem
- Section margins: 2rem

### Border Radius:
- Panel: 12px
- Cards: 10px-12px
- Thumbnail: 32px (large!)
- Buttons: 999px (pill shape)
- CTA card: 8px

---

## Special Features

### 1. **Custom Scrollbar** (Download panel)
```css
Width: 14px
Thumb: Dark gray with white border
Track: White with left border
Arrow buttons: SVG up/down arrows
Hover: Darker thumb
```

### 2. **Image Thumbnails**
- Large border-radius (32px)
- Creates distinctive rounded rectangle look
- Border for definition

### 3. **Icon System**
- Mix of PNG images and SVG icons
- Consistent 42-44px sizing
- Blue color scheme (#12499e)

### 4. **Hover Effects**
- Buttons: Background color change
- Cards: Subtle background highlight
- Links: Underline on hover
- Smooth transitions (0.15s-0.2s)

---

## Responsive Behavior

### Desktop (≥769px):
- Two-column layout
- Fixed panel width (697px)
- Sidebar width (340px)
- Left margin: 77px for panel
- Breadcrumb left margin: 249px

### Tablet (≤900px):
- Smaller hero character
- Smaller document images
- Hide third document image

### Mobile (≤768px):
- Single column layout
- Stacked elements
- Full-width hero
- Contact cards stack vertically
- Reduced padding

---

## Assets Used

### Images:
- `assets/img/asdasd.png` - Hero banner
- `assets/img/cacb3930-f2a0-4c51-a120-b09b169a4851.png` - Icon
- `assets/img/d24756c1-608c-4f9b-a6c0-7931d2f4f8c9.png` - Icon
- `assets/img/b59b74f3-a9ff-4188-80e6-3913ccbf1cb2.png` - Icon
- `assets/img/6369fc6a-3bf6-4295-9cc8-4f66cc301a18.png` - Icon
- `assets/img/width_800 (1).png` - Thumbnail
- `assets/img/uri_ifs___M_udNq4QUo4H9V2Dwz57bjkSbSM7n5NYbOnl6LDudbw.jpg` - Myanmar CTA

### PDFs:
- `assets/pdf/ACAN_company_profile.pdf` - Downloadable resource

---

## Key Design Principles

### 1. **Document-Focused**
- Large thumbnails (140×100)
- Clear file metadata (PDF/size)
- Prominent download buttons
- Professional appearance

### 2. **Informative Sidebar**
- Benefits of downloading
- Clear value proposition
- Related CTA (Myanmar services)

### 3. **Easy Contact**
- Quick access to phone/email
- Visible at bottom
- Multiple contact methods

### 4. **Professional Styling**
- Clean white backgrounds
- Blue accent color
- Consistent spacing
- Clear hierarchy

### 5. **Custom Scrollbar**
- Distinctive visual element
- Better than default
- Matches overall design
- Enhanced UX

---

## User Flow

1. **Land on page** → See hero banner
2. **View breadcrumb** → Understand location
3. **Browse downloads** → Scroll through panel
4. **Read benefits** → Sidebar merits
5. **Download resource** → Click button
6. **Contact if needed** → Phone/email section

---

## Technical Notes

### Embedded Styles:
- All CSS in `<style>` tag (no external file)
- Easier maintenance for single page
- Overrides some main.css styles

### Links:
- PDFs open in new tab (`target="_blank"`)
- Security: `rel="noopener"`
- Internal links use hash navigation

### Accessibility:
- Semantic HTML
- ARIA labels on navigation
- Alt text on images
- Keyboard navigable

---

## Comparison with Main Site

### Similarities:
- Uses site header/footer
- 86% container width
- Blue color scheme (#12499e)
- Anonymous Pro font for headings
- Noto Sans JP for body

### Differences:
- Custom scrollbar design
- Large thumbnail radius (32px vs 12px)
- Document-focused layout
- Two-column grid
- Embedded styles instead of external CSS

---

## Summary

The download page is a **well-designed resource center** with:
- Professional document presentation
- Custom scrollbar for polish
- Clear call-to-actions
- Informative sidebar
- Easy contact options
- Responsive layout
- Consistent branding

**Purpose**: Make it easy for users to find, preview, and download sales materials while providing value propositions and contact options.
