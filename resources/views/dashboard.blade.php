@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<style>
    .dashboard-title {
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 25px;
    }
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
    }
    .stats-card {
        padding: 20px;
        border-radius: 12px;
        color: white;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }
    .stats-card h3 {
        font-size: 22px;
        margin-bottom: 10px;
        font-weight: 600;
    }
    .stats-card p {
        font-size: 36px;
        font-weight: 700;
    }
    .chart-box {
        margin-top: 40px;
        padding: 25px;
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    }
    .chart-box h3 {
        font-size: 22px;
        margin-bottom: 20px;
        font-weight: 600;
    }
    .chart-img {
        width: 100%;
        border-radius: 10px;
    }
</style>

<h2 class="dashboard-title">Dashboard Statistik</h2>

<!-- Statistik Cards -->
<div class="stats-grid">

    <div class="stats-card" style="background: linear-gradient(135deg, #6366f1, #4f46e5);">
        <h3>Total Pengguna</h3>
        <p>{{ $total_users }}</p>
    </div>

    <div class="stats-card" style="background: linear-gradient(135deg, #10b981, #059669);">
        <h3>Total Tanah</h3>
        <p>{{ $total_tanah }}</p>
    </div>

    <div class="stats-card" style="background: linear-gradient(135deg, #f59e0b, #d97706);">
        <h3>Total Bangunan</h3>
        <p>{{ $total_bangunan }}</p>
    </div>

    <div class="stats-card" style="background: linear-gradient(135deg, #ef4444, #dc2626);">
        <h3>Total Ruangan</h3>
        <p>{{ $total_ruangan }}</p>
    </div>

    <div class="stats-card" style="background: linear-gradient(135deg, #3b82f6, #2563eb);">
        <h3>Total Kategori</h3>
        <p>{{ $total_kategori }}</p>
    </div>

    <div class="stats-card" style="background: linear-gradient(135deg, #8b5cf6, #7c3aed);">
        <h3>Total Barang</h3>
        <p>{{ $total_barang }}</p>
    </div>

</div>

@endsection
